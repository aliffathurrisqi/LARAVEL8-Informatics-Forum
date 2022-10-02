<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

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

    public function comment(Request $request)
    {
        Comment::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'body' => $request->body
        ]);

        return redirect('/post/' . $request->post_id);
    }

    public function create()
    {
        return view(
            'post_create',
            [
                "title" => "Buat Tulisan",
                "categories" => Category::all()
            ]
        );
    }

    public function send(Request $request)
    {
        POST::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'body' => $request->body
        ]);

        return redirect('/profile/' . auth()->user()->username);
    }
}
