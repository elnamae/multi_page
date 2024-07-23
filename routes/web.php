<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});
