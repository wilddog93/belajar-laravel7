<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');