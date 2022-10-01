<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Regist_Controller extends Controller
{
    public function index()
    {
        return view(
            'regist',
            [
                "title" => "Daftar",
            ]
        );
    }
}
