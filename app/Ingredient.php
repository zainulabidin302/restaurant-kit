<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
        protected $fillable = [
        'title', 'unit_id', 'min_order_level', 'max_order_level',
    ];

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
}
