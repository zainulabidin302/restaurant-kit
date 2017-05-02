<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipie extends Model
{
    //

    public function recipieItems() {
        return $this->hasMany('\App\RecipieItem');
    }

    public function recipieGroup() {
        return $this->belongsTo('\App\RecipieGroup');
    }
       
}
