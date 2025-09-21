<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wilaya;

class WilayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $json = file_get_contents(database_path('data/wilayas.json'));
        $Wilayas = json_decode($json, true); // decode as associative array

        foreach ($Wilayas as $wilaya) {
            Wilaya::create([
                'name' => $wilaya['name'],
                'code' => $wilaya['code'],
            ]);
        }


    }
}
