<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $ip = $request->ip();
        if($ip == '127.0.0.1'){
            return redirect('/'); //if ip is correct it goes to home page
        }

        return $next($request); // else it go to request(about) page
    }
}
