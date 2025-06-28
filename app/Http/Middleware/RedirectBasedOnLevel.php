<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hasLevel('Admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasLevel('Editor')) {
                return redirect()->route('editor.dashboard');
            } elseif ($user->hasLevel('Member')) {
                return redirect()->route('member.dashboard');
            }
        }
        return $next($request);
    }
}
