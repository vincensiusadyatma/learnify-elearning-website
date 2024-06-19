<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
      
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // Validasi input form login
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

      
        if (Auth::attempt($credentials)) {
            // Check the role of the user and redirect accordingly
            $user = Auth::user();
            if ($user->role->name === 'admin') {
                notify()->success('Login Sucesfully');
                return redirect('/admin/dashboard');
            } elseif ($user->role->name === 'user') {
                notify()->success('Login Sucesfully');
                return redirect('/dashboard');
            }
        }

        // Jika otentikasi gagal, arahkan pengguna kembali ke halaman login dengan pesan kesalahan
        notify()->error('Login Failed');
        return redirect('/login')->with('error', 'Invalid credentials, please try again.');
    }

    public function register(Request $request)
    {
        // Validasi input form pendaftaran
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        // Insert data pengguna baru ke dalam database
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       
        Auth::login($user);

        // Redirect the user based on their role
        if ($user->role->name === 'admin') {
            notify()->success('Register Sucesfully');
            return redirect('/admin/dashboard');
        } elseif ($user->role->name === 'user') {
            notify()->success('Register Sucesfully');
            return redirect('/dashboard');
        }

        // Default redirect in case the role is not recognized
        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Lakukan proses logout pengguna

        // Redirect pengguna ke halaman login dengan pesan sukses
        notify()->success('Logout Sucesfully');
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
