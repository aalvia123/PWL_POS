<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Perbaikan nama fasad
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah pengguna sudah login. Jika belum, kembalikan ke halaman login.
        if (!Auth::check()) {
            return redirect('login');
        }

        // Simpan data pengguna pada variabel $user
        $user = Auth::user();

        // Lakukan pengecekan level pengguna
        // $roles harus didefinisikan sebelumnya untuk membandingkan level pengguna
        $roles = 'level_yang_diharapkan'; // Ganti dengan level yang diharapkan

        // Jika pengguna memiliki level yang sesuai, lanjutkan request
        if ($user->level_id == $roles) {
            return $next($request);
        }

        // Jika pengguna tidak memiliki akses, kembalikan ke halaman login dengan pesan kesalahan
        return redirect('login')->with('error', 'Maaf, Anda tidak memiliki akses.');
    }
}
