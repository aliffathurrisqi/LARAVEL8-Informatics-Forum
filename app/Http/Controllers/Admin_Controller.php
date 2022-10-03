<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class Admin_Controller extends Controller
{

    public function index()
    {
        return view(
            'admin_dashboard',
            [
                "title" => "Dashboard",
                "posts" => Post::all(),
                "users" => User::all(),
                "categories" => Category::all()
            ]
        );
    }

    public function categories()
    {
        return view(
            'admin_categories',
            [
                "title" => "Kategori",
                "categories" => Category::with('posts')->get()
            ]
        );
    }

    public function add_categories(Request $request)
    {

        $validatedData = $request->validate([
            'name' => "required|min:3",
        ]);

        Category::create($validatedData);

        return redirect('admin/categories');
    }

    public function delete_categories(Request $request)
    {
        Category::find($request->del_category)->delete();

        return redirect('admin/categories');
    }

    public function edit_categories(Request $request)
    {
        Category::find($request->id)->update(['name' => $request->name]);

        return redirect('admin/categories');
    }
}
