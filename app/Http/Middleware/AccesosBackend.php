<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
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
        if (Helper::validarUsuarioAdmin()) {
            return $next($request);
        }

        return back()->with('error', 'Perfil de usuario no administrador');
    }
}
