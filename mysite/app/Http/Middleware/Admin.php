<?php

namespace App\Http\Middleware;

use Closure;
//use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Auth;


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
        if ( Auth::check() && Auth::user()->isAdmin() )
        {
            //return redirect ('/admin');
			return $next($request);
        }
		else
		{
			return redirect ('/login');
		}

        //return $next($request);
        //return redirect('/admin');
		
		//return redirect('/about');

    }
}
