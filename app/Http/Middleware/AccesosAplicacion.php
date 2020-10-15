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
        if(is_array($role)){
        //dd($request->user());
            foreach ($role as $role) {
                if (!$request->user()->hasRole($role)) {
                    // abort(401, 'No tienes permiso para realizar esta acción.');
                    return redirect()->route('app.home')->withErrors('No tienes permiso para realizar esta acción.');
                }
                return $next($request);
            }
        }else{
            if (!$request->user()->hasRole($role)) {
                // abort(401, 'No tienes permiso para realizar esta acción.');
                return redirect()->route('app.home')->withErrors('No tienes permiso para realizar esta acción.');
            }
            return $next($request);
        }
        abort(403, "¡No tienes autorizacion para realizar esta acción!");
        // return $next($request);
    }
}
