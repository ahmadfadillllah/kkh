<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboards.index')->with('success', 'Berhasil login');
        }

        return back()->withErrors([
            'nik' => 'NIK / password salah',
        ])->onlyInput('nik');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
