<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'company_name' => 'PT. Winnicode Garuda Indonesia',
            'position' => 'Back-End Developer',
            'duration' => "January 2025 - Present",
                'type' => 'Internship - Remote'
            ],
            [
                'company_name' => 'PT. Ide Kreatif Sejahtera Global',
                'position' => 'Back-End Laravel Developer',
                'duration' => "January 2025 - March 2025",
                'type' => 'Internship - Remote'
            ],
            [
                'company_name' => 'Puskesmas Kec. Muara Dua Lhokseumawe',
            'position' => 'Full-Stack Web Developer', 
            'duration' => "September 2024 - December 2024",
                'type' => 'Internship - On-Site'
            ],
        ];

        // Mengisi data ke dalam tabel
        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
