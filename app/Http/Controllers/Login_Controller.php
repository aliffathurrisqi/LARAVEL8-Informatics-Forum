<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_Controller extends Controller
{

    public function default()
    {
        return redirect('/login');
    }

    public function index()
    {
        return view(
            'login',
            [
                "title" => "Login",
            ]
        );
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => "required",
            'password' => "required",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->isAdmin == true) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/home');
            }
        }

        return back()->with('loginError', "Login gagal!");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
