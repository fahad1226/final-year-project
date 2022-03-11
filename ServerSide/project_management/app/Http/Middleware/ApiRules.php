<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiRules
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('accept') != 'application/json') {
            return response()->json([
                "message" => "The request header must have 'Accept': 'application/json'"
            ], 406);
        }

        return $next($request);
    }
}
