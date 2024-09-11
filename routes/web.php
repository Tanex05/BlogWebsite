<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/blog', function () {
    return view('blog');
})->name('blogs');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');




