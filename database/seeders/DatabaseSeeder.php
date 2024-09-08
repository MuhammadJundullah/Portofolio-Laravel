<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Predict;
use Illuminate\Database\Seeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\CertificateSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil seeder ProjectSeeder
        $this->call(ProjectSeeder::class);
        $this->call(CertificateSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(PredictSeeder::class);
    }
}
