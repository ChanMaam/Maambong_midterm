<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Fillable attributes
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    // Attribute casting
    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
    ];
}
