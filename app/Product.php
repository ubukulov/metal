<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'category_id', 'alias', 'depth', 'diameter', 'gost', 'mark', 'width', 'height', 'size',
        'length', 'size2', 'description', 'size3', 'frak', 'cross_section', 'rated_voltage', 'quantity',
        'skrutka', 'diameter_vn', 'buxta', 'wall1', 'wall2', 'step', 'jumper', 'diameter_vn2'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
