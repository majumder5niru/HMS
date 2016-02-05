<?php

namespace App\Http\Middleware;

use Closure;

class DoctorMiddleware
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
        if(!Auth::check()){
            return redirect()->guest('/auth/login');
        }

        if(!$request->user()->is('doctor'))
        {
            return redirect('/notallowed/Trainee');
        }

        return $next($request);
    }
}
