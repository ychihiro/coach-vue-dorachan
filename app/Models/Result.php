<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'diagnosis_id',
        'character_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function diagnosis()
    {
        return $this->belongsTo('App\Models\Diagnosis');
    }

    public function character()
    {
        return $this->belongsTo('App\Models\Chacacter');
    }
}
