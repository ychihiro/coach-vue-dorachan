<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'diagnosis_id',
    //     'content',
    //     'number'
    // ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function choices() {
        return $this->hasMany('App\Models\Choice');
    }

    public function diagnosis() {
        return $this->belongsTo('App\Models\Diagnosis');
    }
}
