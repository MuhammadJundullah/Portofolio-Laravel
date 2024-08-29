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

        // Ambil semua data dari tabel products
        $certificates = Certificate::all();

        // Ambil semua data dari tabel products
        $educations = Education::all();
        
        // Kirim data ke view
        return view('home', compact('projects', 'certificates', 'educations'));
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
