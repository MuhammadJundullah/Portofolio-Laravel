<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    public function index()
    {
        // Simpan data ke cache selama 1 jam (60 menit)
        $projects = Cache::remember('projects', 60 * 60, function () {
            return Project::all();
        });

        $experiences = Cache::remember('experiences', 60 * 60, function () {
            return Experience::with('jobdesk')->get();
        });

        $certificates = Cache::remember('certificates', 60 * 60, function () {
            return Certificate::all();
        });

        $lastupdate = Cache::remember('lastupdate', 60 * 60, function () {
            return Certificate::latest()->first();
        });

        $educations = Cache::remember('educations', 60 * 60, function () {
            return Education::all();
        });

        // Kirim data ke view
        return view('home', compact('projects', 'certificates', 'educations', 'lastupdate', 'experiences'));
    }

    public function show(Request $request, $slug)
    {
        $cacheKey = "project_{$slug}";

        // Cek apakah data proyek sudah ada di cache
        $project = Cache::remember($cacheKey, 60 * 60, function () use ($slug) {
            return Project::where('slug', $slug)->firstOrFail();
        });

        // Nama view berdasarkan category
        $viewName = strtolower($project->categoryslug);

        // Tampilkan view dengan data proyek
        return View::make($viewName, [
            'project' => $project,
        ]);
    }
}
