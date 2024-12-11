<?php

namespace App\Http\Middleware;

use Auth;
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
    public function handle(Request $request, Closure $next,$roles)
    {
        // dd([
        //     'is_authenticated' => auth()->check(),
        //     'user' => auth()->user(),
        //     'roles' => $roles,
        // ]);
        // merubah roles parameter ke array
        $allowedRoles = explode(',', $roles);

        // Check apakah user telah ter-authenticate dan role nya termasuk dalam allowed roles
        if (!auth()->check() || !in_array(auth()->user()->role, $allowedRoles)) {
            // Jika tidak ter-authenticate atau role not allowed, access ditolak
            abort(403, 'Akun anda tidak memiliki hak akses yang cukup.');
        }

        // Jika pengecekan lolos, lanjutkan request
        return $next($request);
    }
}
