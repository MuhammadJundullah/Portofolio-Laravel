<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    public function index(Request $request)
    {
        Log::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'headers' => json_encode($request->headers->all(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Cache::flush();

        // Simpan data ke cache selama 1 jam (60 menit)
        $projects = Cache::remember('projects', 60 * 60, function () {
            return Project::orderByRaw("
                CASE 
                    WHEN category = 'Web Development' THEN 1
                    WHEN category = 'Data Engineering' THEN 2
                    WHEN category = 'Data Analytics' THEN 3
                    WHEN category = 'Data Science' THEN 4
                    ELSE 5
                END ASC
            ")->get();
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
        Log::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'headers' => json_encode($request->headers->all(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

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

    public function log()
    {
        $logs = Log::orderBy('created_at', 'desc')->get();
        return view('log', compact('logs'));
    }

    public function clearLog()
    {
        Log::truncate();
        return redirect('/log');
    }
}
