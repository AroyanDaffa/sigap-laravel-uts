<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/category', function() {
    return view('category');
});

Route::get('/product', function () {
    return view('product');
});

