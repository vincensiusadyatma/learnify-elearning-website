<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            $userRole = $request->user()->role->name; 

            // Jika role user sesuai dengan salah satu role yang diperbolehkan, lanjutkan request
            if (in_array($userRole, $roles)) {
                return $next($request);
            }
        }

        // Jika tidak, arahkan pengguna kembali ke halaman login
        return redirect('login');
    }
}
