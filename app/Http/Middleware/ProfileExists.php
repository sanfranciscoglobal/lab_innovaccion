<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ProfileExists
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
        if (!isset(Auth::user()->perfil)) {
            return redirect()->route('app.registro')->with('error', 'Completa tu perfil.');
        }
        return $next($request);
    }
}
