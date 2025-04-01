<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['judul', 'slug', 'category', 'categoryslug', 'url', 'photo', 'tech', 'site', 'desc'];

    public $timestamps = false;
}
