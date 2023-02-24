<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evalueation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'diagnosis_id', 'score', 'comment'];

    public function diagnosis()
    {
        return $this->belongsTo('App\Models\Diagnosis');
    }
}
