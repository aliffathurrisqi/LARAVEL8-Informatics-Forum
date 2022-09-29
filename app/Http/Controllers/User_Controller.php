<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class User_Controller extends Controller
{
    public function show(User $user)
    {
        return view(
            'profile',
            [
                "title" => $user->name,
                "users" => $user->load(['posts', 'comments']),
                "posts" => Post::where('user_id', $user->id)->with('user', 'category', 'comments')->orderBy('id', 'desc')->get(),
            ]
        );
    }
}
