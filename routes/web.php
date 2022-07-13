<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


use App\Models\Post;

use \Spatie\YamlFrontMatter\YamlFrontMatter;

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

    // Listen all query played + bindings
    // \Illuminate\Support\Facades\DB::listen(function($query) {
    //     logger($query->sql, $query->bindings);
    // });

    return view('posts', ['posts' => Post::with('category')->get()]);
});

Route::get('posts/{post:slug}', function (Post $post) { // Post::where('slug', $post)->first()
    return view('post', ['post' => $post]);
});


Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});
