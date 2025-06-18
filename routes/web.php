<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/admin', function () {
    return view('admin'); // resources/views/terms-of-service.blade.php
});

Route::get('/create', function () {
    return view('create'); 
});

Route::get('/update',function (Request $request){
    $id = $request->query('id'); // Haal de 'id' query parameter op
    $user = User::find($id); // Zoek de gebruiker op basis van de ID

    if (!$user) {
        abort(404, 'User not found'); // Geef een 404 als de gebruiker niet bestaat
    }

    return view('update', ['user' => $user]); // Geef de gebruiker door aan de view
});


Route::post('/update/{id}', function (Request $request, $id) {
    $user = User::find($id);

    if (!$user) {
        abort(404, 'User not found');
    }

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password'); 
    $user->save();

    return redirect('/user/profile')->with('success', 'User updated successfully');
});

Route::get('/delete', function (Request $request) {
    $id = $request->query('id'); // Haal de 'id' query parameter op
    $user = User::find($id); // Zoek de gebruiker op basis van de ID

    if (!$user) {
        abort(404, 'User not found'); // Geef een 404 als de gebruiker niet bestaat
    }

    $user->delete(); // Verwijder de gebruiker uit de database

    return redirect('/user/profile')->with('success', 'User deleted successfully');
});

Route::get('/create', function () {
    return view('create'); 
});

Route::post('/create', function (Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
    ]);

    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = $validatedData['password']; 
    $user->save();

    return redirect('/user/profile')->with('success', 'User created successfully');
});

Route::get('/user/{bla}', [UserController::class, 'index']);

