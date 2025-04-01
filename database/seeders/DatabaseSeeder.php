<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\CertificateSeeder;
use Database\Seeders\ExperienceSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil seeder ProjectSeeder
        $this->call(ProjectSeeder::class);
        $this->call(CertificateSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(JobdeskSeeder::class);
    }
}
