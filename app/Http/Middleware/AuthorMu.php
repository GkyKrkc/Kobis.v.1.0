<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthorMu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

}  public function handle($request, Closure $next)
{
    if(Auth::check()){

        if(Auth::user()->yetkisi_var_mi("author")){
            return $next($request);
        }

    }
    return view('errors.yetki');
    //return response('Yetkiniz yok.', 401);
}
