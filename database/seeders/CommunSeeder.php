<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wilaya;
use App\Models\Commun;

class CommunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('data/wilayas_communes.json');

        if (!file_exists($jsonPath)) {
            $this->command->error("JSON file not found at: $jsonPath");
            return;
        }

        $data = json_decode(file_get_contents($jsonPath), true);

        foreach ($data as $wilayaData) {
            $wilaya = Wilaya::firstWhere('code', $wilayaData['code']);

            if (!$wilaya) {
                $this->command->warn("Wilaya not found for code: {$wilayaData['code']}");
                continue;
            }

            foreach ($wilayaData['communes'] ?? [] as $communeName) {
                Commun::create([
                    'name' => $communeName,
                    'wilaya_id' => $wilaya->id,
                ]);
            }
        }

        $this->command->info('Wilayas and communes seeded successfully.');
    }
}
