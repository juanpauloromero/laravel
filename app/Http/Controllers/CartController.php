<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addMealToCart($id)
    {
        $idrepas = (int)$id;
        $dishes = Dish::all()->where('is_active', 1);
        if (session('mealssss') > 1){
           /* dd('1');*/
            //session()->put('meals', []);
            session()->push('mealssss', $idrepas);
        }
        else {
            session()->put('mealssss', []);
            session()->push('mealssss', $idrepas);
        }
        //Session::flash('mealadd', 'Message info');
        //return view('home.index', ['dishes' => $dishes]);
        return to_route('home');
    }

    public function finalCart(){
        //foreach(session('mealssss'))
        $dishes = Dish::whereIn('id', session('mealssss'))->get();
        return view('cart.cart-final', ['dishes' => $dishes]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order= new Order(); 

        $order->user_id = $request->user_id;
        $order->order_firstname = $request->order_firstname;
        $order->order_lastname = $request->order_lastname;
        $order->order_adresse = $request->order_adresse;
        $order->order_email = $request->order_email;
        $order->order_phone = $request->order_phone;
        $order->dish_id = $request->dish_id;
        $order->portion_id = $request->portion_id;
      
        $order->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
