<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name'];

    public function characters() {
        return $this->hasMany('App\Models\Character');
    }

    public function questions() {
        return $this->hasMany('App\Models\Question');
    }

    public function likes() {
        return $this->hasMany('App\Models\Like', 'diagnosis_id');
    }
}
