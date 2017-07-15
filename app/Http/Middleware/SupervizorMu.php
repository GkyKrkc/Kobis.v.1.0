<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SupervizorMu
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
        if(Auth::check())
        {
            if(Auth::user()->yetkisi_var_mi("supervizor"))
            {
                return $next($request);
            }
            else
            {
                return abort(403);
            }

        }

        return redirect("/login");
    }
}
