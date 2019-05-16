<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 3) {
            return redirect()->route('teacher');
        }
        elseif (Auth::check() && Auth::user()->role == 4) {
            return redirect()->route('student');
        }
        else {
            return redirect()->route('login');
        }
    }
}
