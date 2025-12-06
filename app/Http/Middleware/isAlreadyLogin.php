<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAlreadyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (auth()->check()) return redirect()->route('dashboard')
            ->withErrors(['auth' => 'Братан, ты ж уже залогался, не занимайся хуйней.']);


        return $next($request);
    }
}
