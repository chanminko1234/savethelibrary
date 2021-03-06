<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddleware
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
        
        if(\Sentinel::inRole("admin") || \Sentinel::inRole("moderator")) {
            return $next($request);    
        }
        return redirect()->to('/');
    }
}
