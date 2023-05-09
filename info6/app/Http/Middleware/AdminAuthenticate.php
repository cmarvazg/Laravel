<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illiminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Illuminate\Http|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)//: Response
    {
        if(Auth::user()->role_id == 1)
            return $next($request);
        
        return redirect('/home');
    }
}
