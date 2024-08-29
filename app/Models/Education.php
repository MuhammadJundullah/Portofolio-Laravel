<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations'; // Nama tabel di database

    protected $fillable = ['name', 'school', 'major', 'date']; // Kolom yang bisa diisi

    public $timestamps = false; // Jika tabel tidak memiliki kolom timestamps (created_at, updated_at)
}
