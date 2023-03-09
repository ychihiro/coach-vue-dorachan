<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabele = [
        'diagnosis_id',
        'name',
        'price',
        'path'
    ];

    public function diagnosis()
    {
        return $this->belongsTo('App\Models\Diagnosis');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\Detail');
    }
}
