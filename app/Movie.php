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
            'category_id',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
