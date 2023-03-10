<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome', [
        'title'=> 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About',
        "name" => "Ridzwan Gigih Herdyantha",
        "email" => "Ridzwangigih3@gmail.com",
        "image" => "gambar.jpg"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title'=> 'About',
        "name" => "Ridzwan Gigih Herdyantha",
        "email" => "Ridzwangigih3@gmail.com",
        "image" => "gambar.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //Halaman Single Posts


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post category',
        'categories' => Category::all()
    ]);
});