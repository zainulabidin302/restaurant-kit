<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Routing\Route;
use Illuminate\Auth;

class Acl
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

        
        $route = \Route::current();
        $user  = \Auth::user();
        $routeAction = $route->getAction();
        if (\Auth::check()) {
            if (isset($routeAction['group_name'])) {
                if ($routeAction['group_name'] == $user->roles[0]->title) {
                    // if user is accessing the allowed route
                    return $next($request);    
                } else {

                    return redirect('/unauth');
                }
            } 
        }
        
        return redirect('/');

        
    }
}
