<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = 'food_items';
    public function food_categories(){
        return $this->belongsTo('App\FoodCategory');
     }
}
