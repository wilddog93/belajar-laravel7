<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
	$name = request('name');
	return view('home', ['name' => $name]);
});

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');