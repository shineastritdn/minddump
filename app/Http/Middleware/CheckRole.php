<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!$request->user() || !in_array($request->user()->role, $roles)) {
            if ($request->user() && $request->user()->role === 'user') {
                return redirect()->route('journals.index')->with('error', 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
            }
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
} 