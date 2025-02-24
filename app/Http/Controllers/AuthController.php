<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect berdasarkan level user
            if ($user->level == 'manager') {
                return redirect()->route('manager.dashboard');
            } elseif ($user->level == 'gudang') {
                return redirect()->route('gudang.dashboard');
            }
        }

        return back()->withErrors(['username' => 'Login gagal, pastikan username dan password benar.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
