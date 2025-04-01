<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobdesk extends Model
{
    protected $table = 'jobdesks';

    protected $fillable = [
        'experiences_id', 
        'description', 
    ];

    public $timestamps = false;

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experiences_id');
    }
}


