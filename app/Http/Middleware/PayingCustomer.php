<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PayingCustomer
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
        if ($request->user() && !$request->user()->subscribed('cashier')) {
            return redirect('pricing');
        }

        return $next($request);
    }
}