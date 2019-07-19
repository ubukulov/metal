<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'category_id', 'alias', 'depth', 'diameter', 'gost', 'mark', 'width', 'height', 'size',
        'length', 'size2', 'description', 'size3', 'fraction'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
