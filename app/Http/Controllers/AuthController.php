<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return 'Login Page Works!';
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($request->email && $request->password) {
            session(['user' => $request->email]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Login gagal!');
    }

    public function dashboard()
    {
        return 'Dashboard Page Works!';
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
