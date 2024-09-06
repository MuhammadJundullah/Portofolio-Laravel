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
            ['name' => 'ds_pijarmahir.png', 
             'desc' => 'Mahir Data Science dari nol.', 
             'date' => '28 Agustus 2024',
             'site' => 'https://pijarmahir.id/sertifikat/vNcoF8pYHX'
            ],
            ['name' => 'dqlab_py.png', 
             'desc' => 'Introduction to Data Science with Python.', 
             'date' => '12 August 2023',
             'site' => 'https://academy.dqlab.id/Certificate_check/result/DQLABINTP1TNWPMF#mycertificate'
            ],
            ['name' => 'dqlab_fundamental_py.png', 
            'desc' => 'Python Fundamental for Data Science.', 
            'date' => '1 September 2024',
            'site' => 'https://academy.dqlab.id/Certificate_check/result/DQLABINTP1SPEBRR#mycertificate'
            ],
            ['name' => 'dqlab_r.png', 
             'desc' => 'Introduction to Data Science with R.', 
             'date' => '12 May 2023',
             'site' => 'https://academy.dqlab.id/Certificate_check/result/DQLABBGINRQBWDEU#mycertificate'
            ],
            ['name' => 'dqlab_sql.png', 
             'desc' => 'Fundamental SQL Using SELECT Statement.', 
             'date' => '1 September 2024',
             'site' => 'https://academy.dqlab.id/Certificate_check/result/DQLABSQLT1GKBFUV#mycertificate'

            ],
            ['name' => 'pmm.png', 
             'desc' => 'Pertukaran Mahasiswa Merdeka Batch 3.', 
             'date' => '5 April 2024',
             'site' => 'https://drive.google.com/file/d/1igaAwwqSovc7jSD8nssTuXuZxkQuIQPj/view?usp=sharing'
            ],
            ['name' => 'inpro.png', 
             'desc' => '3rd Place in Product Innovation Competition.', 
             'date' => '2019',
             'site' => 'https://drive.google.com/file/d/1cpvyMiWUawg8dvedXn6VfBCLDrrg5b51/view?usp=share_link'
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

           
    

        // Mengisi data ke dalam tabel
        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}
