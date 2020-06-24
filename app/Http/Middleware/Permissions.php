<?php

namespace App\Http\Middleware;

use Closure;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        if (\Auth::user()->rol == $rol) {
            return $next($request);
        }else{
            //abort(403, "Acceso no autorizado");
            return redirect('/home');
        }

    }
}
