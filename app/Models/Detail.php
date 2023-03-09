<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'use_id',
        'product_id',
        'purchase_id',
        'count',
    ];

    

    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchase');
    }
}
