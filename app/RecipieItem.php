<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipieItem extends Model
{
    //
    protected $fillable = [
        'recipie_id', 'quantity', 'ingredient_id',
    ];

    public function ingredient() {
        return $this->belongsTo('\App\Ingredient');
    }
    public function recipie() {
        return $this->belongsTo('\App\Recipie');
    }
}
