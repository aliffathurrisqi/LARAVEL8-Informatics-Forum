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
                "categories" => Category::all()
            ]
        );
    }

    public function show(Category $category)
    {
        return view(
            'find_category',
            [
                "title" => $category->name,
                "posts" => $category->posts,
                "category" => $category
            ]
        );
    }
}
