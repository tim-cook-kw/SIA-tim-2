<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class SuperAdmin
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
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return redirect()->route('admin');
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
