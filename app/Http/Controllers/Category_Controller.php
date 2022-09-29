<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class Category_Controller extends Controller
{
    public function index()
    {
        return view(
            'categories',
            [
                "title" => "Kategori",
                "categories" => Category::with('posts')->get()
            ]
        );
    }

    public function show(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->with('user', 'category', 'comments')->orderBy('id', 'desc');

        if (request('search')) {
            $posts = Post::where('category_id', $category->id)
                ->where('judul', 'like', '%' . request('search') . '%')
                ->orwhere('body', 'like', '%' . request('search') . '%')
                ->with('user', 'category', 'comments')
                ->orderBy('id', 'desc');
        }

        return view(
            'find_category',
            [
                "title" => $category->name,
                "posts" => $posts->get(),
                // 'posts' => $category->posts->load('user', 'category', 'comments'),
                "category" => $category
            ]
        );
    }
}
