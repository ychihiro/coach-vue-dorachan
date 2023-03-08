<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name'];

    public function characters() {
        return $this->hasMany('App\Models\Character', 'diagnosis_id');
    }

    public function questions() {
        return $this->hasMany('App\Models\Question');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes() {
        return $this->hasMany('App\Models\Like', 'diagnosis_id');
    }

    public function evalueations()
    {
        return $this->hasMany('App\Models\Evalueation', 'diagnosis_id');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Result');
    }
}
