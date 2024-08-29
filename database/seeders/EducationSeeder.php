<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            ['name' => 'fourta.jpeg', 'school' => 'SMA Negeri 4 Takengon', 'major' => "Natural Sciences Major", 'date' => 'Juli 2019 - juli 2022'],
            ['name' => 'unimal.png', 'school' => 'Malikussaleh University', 'major' => "Bachelor's Degree Informatics Engineering", 'date' => 'Juli 2022 - Present'],
        ];

        // Mengisi data ke dalam tabel
        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
