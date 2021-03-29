<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        
        // dd(Post::all());
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }
}
