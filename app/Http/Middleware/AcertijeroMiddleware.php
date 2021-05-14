<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Auth;

class AcertijeroMiddleware
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
        if (auth()->user()->role ==='acertijero')
        {
            return $next($request);
        	// $this->auth->logout();
        }else{
           Auth::logout();
           return redirect()->to('/');
        }
    }
}