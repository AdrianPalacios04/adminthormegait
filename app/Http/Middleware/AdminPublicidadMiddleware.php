<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPublicidadMiddleware
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
        if (auth()->user()->role == 'adminpublicidad') {
            return $next($request);  
        }
        return redirect("/");
    }
}