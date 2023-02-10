<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function create()
    {

        return view('session.create');
    }


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (
                Auth::user()->role->role_name == 'Admin' ||
                (Auth::user()->role->role_name == 'SuperUser')
            ) return to_route('admin.admin.index');

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Courriel ou mot de passe incorrect.',
        ])->onlyInput('email');
    }


    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
