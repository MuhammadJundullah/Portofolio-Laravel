<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Predict extends Model
{
    protected $table = 'predicts'; // Nama tabel di database

    protected $fillable = ['attributs_1', 'slug_1']; // Kolom yang bisa diisi

    public $timestamps = true; // Jika tabel tidak memiliki kolom timestamps (created_at, updated_at)
}
