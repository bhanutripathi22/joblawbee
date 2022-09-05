<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotCompany
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $guard
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, $guard = 'company')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }

        $redirectToRoute = $request->expectsJson() ? '' : 'company/login';

        throw new AuthenticationException(
            'Unauthenticated.', [$guard], $redirectToRoute
        );
    }

}
