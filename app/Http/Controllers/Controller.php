<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index()
    {
        // Ambil semua data dari tabel products
        $projects = Project::all();

        // Ambil semua data dari relasi experience dengan jobdesk
        $experiences = Experience::with('jobdesk')->get();

        // Ambil semua data dari tabel certificate
        $certificates = Certificate::all();

        // Ambil data tersatas dari tabel certificate
        $lastupdate = Certificate::latest()->first();

        // Ambil semua data dari tabel education
        $educations = Education::all();

        // Kirim data ke view
        return view('home', compact('projects', 'certificates', 'educations', 'lastupdate', 'experiences'));
    }

    public function show(Request $request, $slug)
    {
        // Cari proyek berdasarkan slug
        $project = Project::where('slug', $slug)->firstOrFail();

        // Nama view berdasarkan category
        $viewName = strtolower($project->categoryslug);

        // Tampilkan view dengan data proyek dan hasil prediksi (jika ada)
        return View::make($viewName, [
            'project' => $project,
        ]);
    }
}
    