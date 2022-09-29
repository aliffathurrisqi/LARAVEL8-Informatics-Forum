<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class User_Controller extends Controller
{
    public function show(User $user)
    {
        return view(
            'profile',
            [
                "title" => $user->name,
                "users" => $user,
                "posts" => $user->posts()->orderBy('id', 'desc')->get()
            ]
        );
    }
}
