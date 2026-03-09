<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PortfolioMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!request()->has('access')) {
            return response('Access Denied', 403);
        }

        return $next($request);
    }
}
