<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(post $post)
    {
    	return view('posts.show', compact('post'));
    }
}
