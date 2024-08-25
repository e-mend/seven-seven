<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Http\JsonResponse;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if($request->is('api/*')) {
            abort(response()->json([
                'success' => false,
                'message' =>'不正なユーザー',
            ], 403));
        }
    
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
