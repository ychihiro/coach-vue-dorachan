<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnosis_id',
        'question'
    ];

    public function choices() {
        return $this->hasMany('App\Models\Choice');
    }

    public function diagnosis() {
        return $this->belongsTo('App\Models\Diagnosis');
    }
}
