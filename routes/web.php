<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/frequent', function () {
    return view('frequentlyasked'); // resources/views/FAQ.blade.php
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/terms', function () {
    return view('termsofservice'); // resources/views/terms-of-service.blade.php
});

Route::get('/about', function () {
    return view('about');
});