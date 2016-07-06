<?php

namespace valerie\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        // CHECK TO SEE IF USER IS NOT A GUEST
        if (!app('Illuminate\Contracts\Auth\Guard')->guest()) {
            // CHECK TO SEE IF USER HAS THE PERMISSION NEEDED TO GET TO THIS LOCATION 
            if ($request->user()->can($permission)) {
                 // IF THEY DO, REDIRECT THEM TO THE RIGHT LOCATION 
                return $next($request);
            }
        }
        // IF THEY DO NOT HAVE THE PERMISSION, GIVE THEM A 401 ERROR PAGE AND ASK THEM TO LOGIN
        return $request->ajax ? response('Unauthorized.', 401) : redirect('/login');

    }
}
