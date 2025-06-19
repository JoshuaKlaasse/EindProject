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

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function () {
    // You can handle the form data here, for now just return a success message
    return back()->with('success', 'Thank you for contacting us!');
})->name('contact.submit');

Route::get('/cart', function () {
    return view('cart');
});

