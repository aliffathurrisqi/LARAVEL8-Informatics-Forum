<?php

use App\Http\Controllers\Post_Controller;
use App\Http\Controllers\Category_Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', [Post_Controller::class, 'index']);

Route::get('/post/{post:id}', [Post_Controller::class, 'show']);

Route::get('/categories', [Category_Controller::class, 'index']);

Route::get('/categories/{category:id}', [Category_Controller::class, 'show']);
