<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->type !== 'user') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        return $next($request);
    }
}
