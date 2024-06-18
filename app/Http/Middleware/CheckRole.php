<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if ($request->user()) {
            $userRole = $request->user()->role_id;
            
            // Jika rolenya sesuai, lanjutkan dengan permintaan
            if ($userRole === 1) {
                return $next($request);
            }
        }

        // Jika tidak, arahkan pengguna kembali ke halaman login
        return redirect('/login');

    
    }
}
