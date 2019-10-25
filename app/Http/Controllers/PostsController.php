<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {

        $posts = Post::orederBy('created_at', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
