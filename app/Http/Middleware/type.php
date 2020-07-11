<?php

namespace App\Http\Middleware;

use Closure;

class type
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
        if (is_null(auth()->user())) {
          return redirect(route('login'));
         } 
        $type=auth()->user()->type;
        if ($type=='doctor') {
            return redirect(route('viewA'));
        }
        if ($type=='admin') {
            return redirect(route('viewAd'));
        }

        return $next($request);
    }
}
