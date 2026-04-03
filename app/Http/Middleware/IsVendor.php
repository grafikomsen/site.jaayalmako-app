<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsVendor
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoles = ['vendor', 'admin'];
        if (!in_array($request->user()?->role, $allowedRoles)) {
            return abort(403, 'Accès refusé');
        }
        return $next($request);
    }
}
