<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class Post_Controller extends Controller
{
    public function index()
    {
        return view(
            'index',
            [
                "title" => "Home",
                "posts" =>  Post::with(['user', 'category', 'comments'])
                    ->filter(request(['search']))->orderBy('id', 'desc')->paginate(10)
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'post',
            [
                "title" => $post->judul,
                "posts" => $post->load(['user', 'category']),
                "comments" => Comment::where('post_id', $post->id)->with('user', 'posts')->orderBy('id', 'desc')->get()
            ]
        );
    }
}
