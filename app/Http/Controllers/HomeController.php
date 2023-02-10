<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $dishes = Dish::all()->where('is_active', 1);

        return view('home.index', ['dishes' => $dishes]);
    }
}
