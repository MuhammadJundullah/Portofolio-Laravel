<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Education;
use App\Models\Certificate;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

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

    public function show($slug)
    {
        // Cari proyek berdasarkan slug
        $project = Project::where('slug', $slug)->firstOrFail();

        // Nama view berdasarkan category
        $viewName = strtolower($project->categoryslug);

        // Tampilkan view dengan data proyek
        return View::make($viewName, ['project' => $project]);
    }
}
    