<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
            'title',
            'slug',
            'description',
            'series',
            'sale_date',
            'price',
            'type',
    ];
}
