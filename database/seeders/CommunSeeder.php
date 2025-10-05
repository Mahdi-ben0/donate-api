<?php

namespace Database\Seeders;
use App\Models\Wilaya;
use App\Models\Commun;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load the wilayas data
        $wilayasData = require database_path('data/wilayas.php');
        
        // Track processed wilayas to avoid duplicates
        $processedWilayas = [];
        
        foreach ($wilayasData as $entry) {
            $wilayaNameAscii = $entry['wilaya_name_ascii'];
            $wilayaCode = $entry['wilaya_code'];
            $communeNameAscii = $entry['commune_name_ascii'];
            $communeNameAr = $entry['commune_name'];
            $wilayaNameAr = $entry['wilaya_name'];
            // Check if wilaya already exists in database
            $wilaya = Wilaya::where('name', $wilayaNameAscii)->first();
            
            if (!$wilaya) {
                // Create new wilaya if it doesn't exist
                $wilaya = Wilaya::create([
                    'name' => $wilayaNameAscii,
                    'name_ar' => $wilayaNameAr,
                    'code' => $wilayaCode
                ]);
                
                echo "Created wilaya: {$wilayaNameAscii} (Code: {$wilayaCode})\n";
            }
            
            // Check if commune already exists for this wilaya
            $existingCommune = Commun::where('name', $communeNameAscii)
                                   ->where('wilaya_id', $wilaya->id)
                                   ->first();
            
            if (!$existingCommune) {
                // Create new commune
                Commun::create([
                    'name' => $communeNameAscii,
                    'name_ar' => $communeNameAr,
                    'wilaya_id' => $wilaya->id
                ]);
                
               // echo "Created commune: {$communeNameAscii} for wilaya: {$wilayaNameAscii}\n";
            }
        }
        
        echo "Seeder completed successfully!\n";
    }
}
