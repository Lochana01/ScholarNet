<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    

    public function handle(Request $request, Closure $next, ...$allowedRoles)
    {
        $user = auth()->user();
        //\Log::info("User Role: " . $user->user_type);

        // Check if the user's role matches any of the allowed roles
        if (!in_array($user->user_type, $allowedRoles)) {
            abort(403);
        }

        return $next($request);
    }
    
}
