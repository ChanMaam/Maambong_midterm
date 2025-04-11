<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Fillable attributes
    protected $fillable = [
        'name',
        'description',
    ];

    // Attribute casting
    protected $casts = [
        'name' => 'string',
    ];
}
