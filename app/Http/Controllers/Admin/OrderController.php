<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Dish;
use App\Models\User;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $orders = Order::with('dishes')->get();
        $users = User::all();
        return view('admin.orders.index', ['orders' => $orders]);
    
    }

    public function store(Request $request)
    {

        $order= new Order(); 

        $order->user_id = $request->user_id;
        $order->order_firstname = $request->order_firstname;
        $order->order_lastname = $request->order_lastname;
        $order->order_adresse = $request->order_adresse;
        $order->order_email = $request->order_email;
        $order->order_phone = $request->order_phone;
        $order->delivery_id = $request->delivery_id;
        $order->dish_id = $request->dish_id;
        $order->portion_id = $request->portion_id;
        $order->order_total = $request->order_total;
      
        $order->save();

   

        return redirect()->route('admin.orders.index');
    }

    public function destroy($id)
        {
            Order::destroy($id);
            return redirect()->route('admin.orders.index')->with('succes', 'La commande a été supprimé');
        }
}
