<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Fidelity;
// use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Models\Dish;


class FidelityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    $orders = Order::with('dishes')->where('user_id', Auth::user()->id)->get();
        
       return view('home.fidelities.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.fidelities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user = new User();

        $user->role_id = $user::ROLE_CLIENT;
        $user->user_firstname = $request->user_firstname;
        $user->user_lastname = $request->user_lastname;
        $user->user_adresse = $request->user_adresse;
        $user->email = $request->email;
        $user->user_phone = $request->user_phone;
        $user->password = hash::make($request->password);




        $user->save();

        

        // return redirect()->route('home.index')->with('succes', 'Le user a été créé');
       // return to_route('home');
       return to_route('login');
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
        
        $user = User::findOrFail($id);
        return view('home.fidelities.edit', ['user' => $user]);
        
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
        $user = User::findOrFail($id);

        $user->role_id = $user::ROLE_CLIENT;
        $user->user_firstname = $request->user_firstname;
        $user->user_lastname = $request->user_lastname;
        $user->user_adresse = $request->user_adresse;
        $user->email = $request->email;
        $user->user_phone = $request->user_phone;
        $user->password = hash::make($request->password);




        $user->save();

        // return redirect()->route('home.index')->with('succes', 'Le user a été créé');
        return to_route('home');
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
