<?php

namespace App\Http\Middleware;

use Closure;

class ViewOperations
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
        if (\Auth::check()) {
            $roles = \Auth::user()->roles;
            \View::share('navigation', $this->getRoutesOf($roles));
        }
        return $next($request);

    }

    private function getRoutesOf($roles = []) {
        $app = app();
        $routes = [];
        
        foreach($roles as $role) {
            foreach($app->routes->getRoutes() as $route) {
                $routeAction = $route->getAction();

                $route_indexable = isset($routeAction['group_name']) 
                            && !(isset($routeAction[1]) && $routeAction[1] == 'no_index');

               
                
                if ($route_indexable) {
                    $is_get   = in_array('GET',$route->methods);
                    $is_role  = $routeAction['group_name'] == $role->title;
                    if ($is_get && $is_role)
                        $routes[] = $route;
                }
                
                    
            }
        }
        return $routes;
    }   
}
