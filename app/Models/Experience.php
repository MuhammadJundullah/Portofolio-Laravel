<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'company_name', 
        'position', 
        'duration', 
        'type'
    ];

    public $timestamps = false;

    public function jobdesk()
    {
        return $this->hasMany(Jobdesk::class, 'experiences_id');
    }
}
