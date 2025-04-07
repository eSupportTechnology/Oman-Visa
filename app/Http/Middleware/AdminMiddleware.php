<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {

    public function handle(Request $request, Closure $next): Response{

        if (Auth::user()->is_admin != true) {
            return redirect()->route('login')->with('message', 'Admin only');
        }

        return $next($request);
    }
}