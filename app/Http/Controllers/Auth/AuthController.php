<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input form login
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Coba untuk melakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, arahkan pengguna ke dashboard
            return redirect()->intended('/dashboard');
        }

        // Jika otentikasi gagal, arahkan pengguna kembali ke halaman login dengan pesan kesalahan
        return redirect('/login')->with('error', 'Invalid credentials, please try again.');
    }
}
