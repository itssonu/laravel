<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class adminMiddleware
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
        if (Auth::check() && Auth::User()->role == 0) {
            return $next($request);
        }
        else {
            return redirect('admin/login')->with('error','only admin can acces this route');
        }
       
    }
}
