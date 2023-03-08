<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'purchase_id',
        'count',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
