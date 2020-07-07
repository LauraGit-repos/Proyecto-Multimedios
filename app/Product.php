<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'code', 'price', 'description','photo'
    ];

    protected $casts = [
        'price' => 'double',
    ];

}
