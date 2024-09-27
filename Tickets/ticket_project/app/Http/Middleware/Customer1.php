<?php

namespace App\Http\Middleware;


use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Customer1 extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('customer.login');
    }
    
}
