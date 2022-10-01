<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Login_Controller;
use App\Http\Controllers\Regist_Controller;
use App\Http\Controllers\Category_Controller;

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

Route::get('/categories', [Category_Controller::class, 'index'])->middleware('auth');

Route::get('/categories/{category:id}', [Category_Controller::class, 'show'])->middleware('auth');

Route::get('/profile/{user:username}', [User_Controller::class, 'show'])->middleware('auth');

Route::get('/', [Login_Controller::class, 'default']);

Route::get('/login', [Login_Controller::class, 'index'])->name('login');

Route::post('/login', [Login_Controller::class, 'authenticate']);

Route::post('/logout', [Login_Controller::class, 'logout']);

Route::get('/register', [Regist_Controller::class, 'index']);

Route::post('/register', [Regist_Controller::class, 'store']);
