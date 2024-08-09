<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RepresentativeMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_representative) {
            return $next($request);
        }

        return redirect('/');
    }
}