<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates'; // Nama tabel di database

    protected $fillable = ['name', 'desc', 'date']; // Kolom yang bisa diisi

    public $timestamps = true; // Jika tabel tidak memiliki kolom timestamps (created_at, updated_at)
}
