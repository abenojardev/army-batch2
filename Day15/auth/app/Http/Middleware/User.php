<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth, Redirect;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // if logged In 
        // Auth::check() returns true if the user
        // is logged in and false if not
        if(!Auth::check()){
            return Redirect::route('login');
        }  

        return $next($request);
    }
}
