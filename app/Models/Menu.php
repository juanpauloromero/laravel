<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dish;

class Menu extends Model
{
    use HasFactory;

 public function dish(){

  return $this->belongsTo(Dish::class);
  }

}
