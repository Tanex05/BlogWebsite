<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('blog');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');




