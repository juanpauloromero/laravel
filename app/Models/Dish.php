<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Menu;


class Dish extends Model
{
    use HasFactory;

    public function menus()
    {


        return $this->hasMany(Menu::class);
    }

    public function orders()
    {


        return $this->hasMany(Order::class);
    }
}
