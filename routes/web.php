<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Login_Controller;
use App\Http\Controllers\Regist_Controller;
use App\Http\Controllers\Category_Controller;
use App\Http\Controllers\Admin_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [Post_Controller::class, 'index'])->middleware('auth');

Route::get('/post/{post:id}', [Post_Controller::class, 'show'])->middleware('auth');

Route::post('/post/{post:id}', [Post_Controller::class, 'comment'])->middleware('auth');

Route::get('/user/create/post', [Post_Controller::class, 'create'])->middleware('auth');

Route::post('/user/create/post', [Post_Controller::class, 'send'])->middleware('auth');

Route::get('/categories', [Category_Controller::class, 'index'])->middleware('auth');

Route::get('/categories/{category:id}', [Category_Controller::class, 'show'])->middleware('auth');

Route::get('/profile/{user:username}', [User_Controller::class, 'show'])->middleware('auth');

Route::get('/profile/user/edit', [User_Controller::class, 'edit'])->middleware('auth');

Route::get('/', [Login_Controller::class, 'default']);

Route::get('/login', [Login_Controller::class, 'index'])->name('login');

Route::post('/login', [Login_Controller::class, 'index']);

Route::post('/login/auth', [Login_Controller::class, 'authenticate']);

Route::post('/logout', [Login_Controller::class, 'logout']);

Route::get('/register', [Regist_Controller::class, 'index']);

Route::post('/register', [Regist_Controller::class, 'store']);

// ADMIN ROUTES

Route::get('/admin', [Admin_Controller::class, 'index']);

Route::get('/admin/categories', [Admin_Controller::class, 'categories']);

Route::post('/admin/categories/add', [Admin_Controller::class, 'add_categories']);

Route::get('/admin/categories/edit', [Admin_Controller::class, 'edit_categories']);

Route::get('/admin/categories/delete', [Admin_Controller::class, 'delete_categories']);
