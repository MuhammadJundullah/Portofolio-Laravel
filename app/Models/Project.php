<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects'; // Nama tabel di database
    protected $fillable = ['judul', 'slug', 'category', 'url', 'site', 'desc']; // Kolom-kolom yang bisa diisi

    public $timestamps = false;
}
