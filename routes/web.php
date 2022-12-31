<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comments.destroy');

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts' => $posts]);
});
Route::get('/posts/{id}', function ($id) {
});
Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});