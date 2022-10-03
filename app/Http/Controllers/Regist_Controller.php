<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'username' => "required|min:5|max:25|unique:users",
            'name' => "required|min:3",
            'password' => "required|min:5|max:255",
            'konfirmasi' => "required|min:5|max:255",
        ]);

        if ($validatedData['password'] == $validatedData['konfirmasi']) {
            $validatedData['password'] = Hash::make($validatedData['password']);

            User::create([
                'username' => $validatedData["username"],
                'name' => $validatedData["name"],
                'password' => $validatedData["password"],
                'isAdmin' => false,
            ]);

            return redirect('/login')->with("success", "Registrasi akun berhasil!");
        } else {
            return redirect('/register')
                ->with("error", "Konfirmasi Password salah!");
        }
    }
}
