<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Http\Request;

class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() &&
            Auth::user()->hasAnyRole(['super_admin', 'admin', 'editor'])){
                return $next($request);
        }

        return redirect('/');
    }
}
