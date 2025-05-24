<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login-beranda.login');
    }

    // public function login(Request $request)
    // {
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     // Dummy login: email dan password hardcoded
    //     if ($email === 'admin@schocare.com' && $password === 'admin123') {
    //         return redirect('/');
    //     }

    //     return back()->withErrors(['email' => 'Email atau password salah.']);
    // }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {  // Gunakan Auth facade
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('login-beranda.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);  // Gunakan Auth facade

        return redirect('/beranda');
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();  // Gunakan Auth facade
        return redirect('/');
    }
}
