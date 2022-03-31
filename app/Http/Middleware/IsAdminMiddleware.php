<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        abort_if($request->header('Authorization') !== config('app.admin_auth'), 403);

        return $next($request);
    }
}
