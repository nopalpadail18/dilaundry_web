<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckApiLogin
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('access_token')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
