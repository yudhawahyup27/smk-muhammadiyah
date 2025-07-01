<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function loginIndex()
        {
            return view("auth.login");
        }

       public function login(Request $request)
{
    $credentials = $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->remember)) {
        $request->session()->regenerate();
        return redirect()->intended(route('dashboards')); // ✅ FIXED
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->withInput();
}
}
