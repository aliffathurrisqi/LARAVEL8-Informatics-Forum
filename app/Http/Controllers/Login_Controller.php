<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
