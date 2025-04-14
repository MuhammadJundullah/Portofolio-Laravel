<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'method',
        'headers',
        'payload',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;
}


