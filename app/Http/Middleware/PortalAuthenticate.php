<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class PortalAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah session portal_access ada
        if (!Session::has('portal_access')) {
            // Jika tidak ada, redirect ke halaman login Portal
            // Flash pesan error
            return redirect()->route('portal.form')->withErrors(['auth' => 'Anda harus login untuk mengakses Portal.']);
        }

        return $next($request);
    }
}
