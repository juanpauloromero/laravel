<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureHashRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if ($user->isSuperAdmin())
            return $next($request);

        // dd($user->role->role_name);
        if ($user->role->role_name == $role)
            return $next($request);

        return redirect()
            ->route('home')
            ->withErrors('¡No tienes acceso a este recurso!');
    }
}
