<?php

namespace App\Http\Controllers;

use App\Models\Predict;
use App\Models\Project;
use App\Models\Education;
use App\Models\Certificate;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class Controller extends BaseController
{
    public function index()
    {
        // Ambil semua data dari tabel products
        $projects = Project::all();

        // Ambil semua data dari tabel certificate
        $certificates = Certificate::all();

        // Ambil data tersatas dari tabel certificate
        $lastupdate = Certificate::latest()->first();

        // Ambil semua data dari tabel education
        $educations = Education::all();
        
        // Kirim data ke view
        return view('home', compact('projects', 'certificates', 'educations', 'lastupdate'));
    }



public function show(Request $request, $slug)
{
    // Cari proyek berdasarkan slug
    $project = Project::where('slug', $slug)->firstOrFail();

    // Nama view berdasarkan category
    $viewName = strtolower($project->categoryslug);

    // Inisialisasi prediksi sebagai null
    $prediction = null;

    // Cek apakah request adalah POST (form submission)
    if ($request->isMethod('post')) {
        // Ambil data dari form
        $data = $request->all();
        
        // Format data sesuai dengan yang diharapkan oleh API
        $formattedData = [
            'CreditScore' => (int) $data['CreditScore'],
            'Age' => (int) $data['Age'],
            'Balance' => (int) $data['Balance'],
            'Has_Credit_Card' => (int) $data['Has_Credit_Card'],
            'Is_Active_Member' => (int) $data['Is_Active_Member'],
            'Estimated_Salary' => (int) $data['Estimated_Salary'],
            'geo_France' => (int) $data['geo_France'],
            'geo_Germany' => (int) $data['geo_Germany'],
            'geo_Spain' => (int) $data['geo_Spain'],
            'Female' => (int) $data['Female'],
            'Male' => (int) $data['Male'],
            'nop_1' => (int) $data['nop_1'],
            'nop_2' => (int) $data['nop_2'],
            'nop_3' => (int) $data['nop_3'],
            'nop_4' => (int) $data['nop_4'],
            'Ten_0' => (int) $data['Ten_0'],
            'Ten_1' => (int) $data['Ten_1'],
            'Ten_2' => (int) $data['Ten_2'],
            'Ten_3' => (int) $data['Ten_3'],
            'Ten_4' => (int) $data['Ten_4'],
            'Ten_5' => (int) $data['Ten_5'],
            'Ten_6' => (int) $data['Ten_6'],
            'Ten_7' => (int) $data['Ten_7'],
            'Ten_8' => (int) $data['Ten_8'],
            'Ten_9' => (int) $data['Ten_9'],
            'Ten_10' => (int) $data['Ten_10'],
        ];


        try {
            // Inisialisasi Guzzle Client untuk mengirim data ke API Flask
            $client = new Client();
            Log::info('Formatted data:', $formattedData);
            $response = $client->post('http://127.0.0.1:5000/predict', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => $formattedData,
            ]);

            // Ambil hasil prediksi dari respons API
            $hasil_prediksi = json_decode($response->getBody(), true);

            // Periksa jika prediksi ada dalam respons
            if (isset($hasil_prediksi['prediction'])) {
                $prediction = $hasil_prediksi['prediction'];
                if (is_array($prediction) && isset($prediction[0])) {
                    $prediction = $prediction[0] == 1 ? 'Pelanggan diperkirakan akan churn.' : 'Pelanggan diperkirakan tidak akan churn.';
                } else {
                    $prediction = 'Data prediksi tidak tersedia.';
                }
            } else {
                $prediction = 'Tidak ada prediksi tersedia';
            }
        } catch (\Exception $e) {
            // Tangani exception dan log error
            Log::error('Gagal menghubungi API: ' . $e->getMessage());
            $prediction = 'Terjadi kesalahan saat mengambil data dari API. Detail error: ' . $e->getMessage();
        }
    }

    // Tampilkan view dengan data proyek dan hasil prediksi (jika ada)
    return View::make($viewName, [
        'project' => $project,
        'predicts' => Predict::all(), // Jika masih digunakan
        'prediction' => $prediction,
    ]);
}

}
    