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
            ['name' => 'fourta.jpeg', 'school' => 'SMA Negeri 4 Takengon', 'major' => "Natural Sciences Major", 'date' => 'July 2019 - July 2022'],
            ['name' => 'unimal.png', 'school' => 'Malikussaleh University', 'major' => "Bachelor's Degree Informatics Engineering", 'date' => 'July 2022 - Present'],
            ['name' => 'uhamka.png', 'school' => 'Prof. Dr. Hamka University', 'major' => "Exchange Student Informatics Engineering", 'date' => 'September 2023 - February 2024'],
        ];

        // Mengisi data ke dalam tabel
        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
