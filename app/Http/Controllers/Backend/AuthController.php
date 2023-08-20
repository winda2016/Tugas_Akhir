<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, redirect ke halaman yang sesuai
            $user = Auth::user();
            if ($user->role == 'super_admin' || $user->role == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->intended('/');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to a specific page after logout (optional)
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ], [
            'nama.required' => 'Kolom nama wajib diisi.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.min' => 'Password harus memiliki setidaknya 8 karakter.',
        ]);

        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Sesuaikan dengan logika autentikasi atau pengalihan halaman setelah pendaftaran berhasil
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan masuk dengan akun yang telah dibuat.');
    }
}
