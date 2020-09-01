<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AccesosBackend extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($roles = json_decode(Cookie::get('roles'))) {
            foreach ($roles as $rol) {
                if ($rol == 'ADMIN') {
                    return $next($request);
                }
            }
        }

        return back()->with('error', 'Perfil de usuario no administrador');
    }
}
