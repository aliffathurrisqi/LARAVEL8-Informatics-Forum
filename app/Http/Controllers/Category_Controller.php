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
        return view(
            'find_category',
            [
                "title" => $category->name,
                "posts" => Post::where('category_id', $category->id)->with('user', 'category', 'comments')->orderBy('id', 'desc')->get(),
                // 'posts' => $category->posts->load('user', 'category', 'comments'),
                "category" => $category
            ]
        );
    }
}
