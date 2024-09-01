<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data yang ingin diisi
        $certificates = [
            ['name' => 'ds_pijarmahir.png', 'desc' => 'Mahir Data Science dari nol.', 'date' => '28 Agustus 2024'],
            ['name' => 'dqlab_py.png', 'desc' => 'Introduction to Data Science with Python.', 'date' => '12 August 2023'],
            ['name' => 'dqlab_fundamental_py.png', 'desc' => 'Python Fundamental for Data Science.', 'date' => '1 September 2024'],
            ['name' => 'dqlab_r.png', 'desc' => 'Introduction to Data Science with R.', 'date' => '12 May 2023'],
            ['name' => 'dqlab_sql.png', 'desc' => 'Fundamental SQL Using SELECT Statement.', 'date' => '1 September 2024'],
            ['name' => 'pmm.png', 'desc' => 'Pertukaran Mahasiswa Merdeka Batch 3.', 'date' => '5 April 2024'],
            ['name' => 'inpro.png', 'desc' => '3rd Place in Product Innovation Competition.', 'date' => '2019'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

           
    

        // Mengisi data ke dalam tabel
        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}
