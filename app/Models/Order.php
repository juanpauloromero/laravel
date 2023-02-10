<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dish;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    public function dishes(){

        return $this->belongsToMany(Dish::class);

        }

    public function Users(){
       
       return $this->hasMany(User::class);
       
}
}