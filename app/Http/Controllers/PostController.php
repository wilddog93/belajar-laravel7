<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->firstorFail();
        //artinya = $post = select from table posts where slug = $slug

    	return view('posts.show', compact('post'));
    }
}
