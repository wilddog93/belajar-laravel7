<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts/{post:slug}', 'PostController@show'); //jika kita membuat hanya kolom post maka akan di anggap memanggil id

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');