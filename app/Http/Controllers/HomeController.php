<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request => request()
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $name = request('name');
        return view('home', compact('name')); //method compact dan array di bawah memiliki yang sama
        // return view('home', ['name' => $name]);
    }
}
