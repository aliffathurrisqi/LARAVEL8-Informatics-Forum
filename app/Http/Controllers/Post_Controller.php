<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class Post_Controller extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'category', 'comments'])->orderBy('id', 'desc');

        if (request('search')) {
            $posts = Post::with(['user', 'category', 'comments'])
                ->where('judul', 'like', '%' . request('search') . '%')
                ->orwhere('body', 'like', '%' . request('search') . '%')
                ->orderBy('id', 'desc');
        }

        return view(
            'index',
            [
                "title" => "Home",
                "posts" => $posts->get()
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
