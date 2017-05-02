<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
   public function order() {
        return $this->belongsTo('\App\Order');
    }
   
   public function recipie() {
        return $this->belongsTo('\App\Recipie');
    }     
}
