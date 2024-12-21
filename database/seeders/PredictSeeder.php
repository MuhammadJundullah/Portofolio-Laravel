<?php

namespace Database\Seeders;

use App\Models\Predict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PredictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predicts = [
            ["attributs_1" => "Customer Credit Score", "slug_1" => "CreditScore"],
            ["attributs_1" => "Customer Age", "slug_1" => "Age"],
            ["attributs_1" => "Customer Balance", "slug_1" => "Balance"],
            ["attributs_1" => "Has Credit Card ?", "slug_1" => "Has_Credit_Card"],
            ["attributs_1" => "Estimated Salary", "slug_1" => "Estimated_Salary"],
            ["attributs_1" => "Is Active Member", "slug_1" => "Is_Active_Member"],
            ["attributs_1" => "Are Customer from France", "slug_1" => "geo_France"],
            ["attributs_1" => "Are Customer from Germany", "slug_1" => "geo_Germany"],
            ["attributs_1" => "Are Customer from Spain", "slug_1" => "geo_Spain"],
            ["attributs_1" => "Is Female", "slug_1" => "Female"],
            ["attributs_1" => "Is Male", "slug_1" => "Male"],
            ["attributs_1" => "Customer take 1 Product ?", "slug_1" => "nop_1"],
            ["attributs_1" => "Customer take 2 Product ?", "slug_1" => "nop_2"],
            ["attributs_1" => "Customer take 3 Product ?", "slug_1" => "nop_3"],
            ["attributs_1" => "Customer take 4 Product ?", "slug_1" => "nop_4"],
            ["attributs_1" => "Customer Tenure 0 years", "slug_1" => "Ten_0"],
            ["attributs_1" => "Customer Tenure 1 years", "slug_1" => "Ten_1"],
            ["attributs_1" => "Customer Tenure 2 years", "slug_1" => "Ten_2"],
            ["attributs_1" => "Customer Tenure 3 years", "slug_1" => "Ten_3"],
            ["attributs_1" => "Customer Tenure 4 years", "slug_1" => "Ten_4"],
            ["attributs_1" => "Customer Tenure 5 years", "slug_1" => "Ten_5"],
            ["attributs_1" => "Customer Tenure 6 years", "slug_1" => "Ten_6"],
            ["attributs_1" => "Customer Tenure 7 years", "slug_1" => "Ten_7"],
            ["attributs_1" => "Customer Tenure 8 years", "slug_1" => "Ten_8"],
            ["attributs_1" => "Customer Tenure 9 years", "slug_1" => "Ten_9"],
            ["attributs_1" => "Customer Tenure 10 years", "slug_1" => "Ten_10"],
   
           
        ];

                // Mengisi data ke dalam tabel
        foreach ($predicts as $predict) {
            Predict::create($predict);
        }

    }
}
