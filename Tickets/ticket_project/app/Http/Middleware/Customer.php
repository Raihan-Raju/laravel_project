<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('customer')->check() && $request->routeIs('customer.login')) {
            return redirect()->route('customer.dashboard'); // লগইন থাকলে ড্যাশবোর্ডে পাঠান
        }
        
        if(Auth::guard('customer')->check()){
            return $next($request);            
        }

        return redirect()->route('customer.login')->with('error','you do not have access');
        
    }
}
