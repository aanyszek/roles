<?php

namespace Bunta\Roles;

use Closure;

class RolesMiddleware
{
   
    public function handle($request, Closure $next, $role)
    {
        if (\Auth::user()->hasRole($role)) {
          return $next($request);
        }
        
        return response('blank', 404);
    }
}