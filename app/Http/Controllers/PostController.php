<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
    	$post = \DB::table('posts')->where('slug', $slug)->first();
    	//artinya = $post = select from table posts where slug = $slug

    	return view('posts.show', compact('post'));
    }
}
