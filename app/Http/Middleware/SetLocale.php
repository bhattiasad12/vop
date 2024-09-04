<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (is_null(session('locale')))
            session(['locale' => 'ur']); // set language Urdu if language is not set in session

        app()->setLocale(session('locale')); // set the session's language to our application

        return $next($request);
    }
}
