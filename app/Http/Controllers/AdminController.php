<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Retrieve all posts and comments
        $posts = Post::all();
        $comments = Comment::all();

        // Return the admin view with the posts and comments data
        return view('admin.index', compact('posts', 'comments'));
    }
}
