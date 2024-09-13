<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login-register');
})->name('login');

Route::get('/home', function () {
    return view('blogs.discover');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/blog-post', function () {
    return view('blogs.single-post');
})->name('post.blog-post');




