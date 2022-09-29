<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Post_Controller extends Controller
{
    public function index()
    {
        return view(
            'index',
            [
                "title" => "Home",
                "posts" => Post::orderBy('id', 'desc')->get()
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'post',
            [
                "title" => $post->judul,
                "posts" => $post,
                "comments" => $post->comments()->orderBy('id', 'desc')->get()
            ]
        );
    }
}
