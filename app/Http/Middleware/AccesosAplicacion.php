<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AccesosAplicacion extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
       if (!$request->user()->hasRole($role)) {
            abort(401, 'No tienes permiso para realizar esta acción.');
        }
        return $next($request);
    }
}
