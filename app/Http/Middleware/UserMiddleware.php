<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna yang sedang login adalah admin
         // Ambil data pengguna berdasarkan email
         $user = User::where('email', $request->email)->first();

         // Periksa apakah pengguna ditemukan dan password cocok
         if ($user && $user->password === $request->password) {
             // Jika login berhasil, arahkan pengguna sesuai level
             if ($user->isAdmin()) {
                 return redirect()->route('dashboard.dashboard');
             } else {
                 return redirect()->route('dashboard.user');
             }
         } else {
             // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
             return redirect()->route('login')->with('error', 'Email atau password salah.');
         }

        // Jika bukan admin, arahkan kembali ke halaman login
        return redirect()->route('login')->with('error', 'Anda tidak memiliki akses sebagai admin.');
    }
}
