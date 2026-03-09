<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class PortfolioMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Log every visit
        Log::info('Portfolio accessed from IP: ' . $request->ip());

        // Example simple restriction
        if (!$request->has('access')) {
            return response('Access Denied. Add ?access=true to the URL.', 403);
        }

        return $next($request);
    }
}