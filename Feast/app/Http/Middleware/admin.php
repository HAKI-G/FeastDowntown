<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->usertype != 'admin') {
            return redirect('dashboard'); // Redirect non-admins to the user dashboard
        }

        return $next($request);
    }
}
