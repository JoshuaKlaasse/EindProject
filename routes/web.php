<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index']); 


Route::get('/frequent', function () {
    return view('frequentlyasked'); // resources/views/FAQ.blade.php
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
Route::get('/payment', function () {
    return view('payment');
});

Route::get('/cart', function () {
    return view('cart');
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
    $user->password = bcrypt($request->input('password')); 
    $user->save();

    return redirect('/user/profile')->with('success', 'User updated successfully');
});

Route::get('/updateProduct', function (Request $request) {
    $id = $request->query('id'); // Haal de 'id' query parameter op
    $product = Product::find($id); // Zoek het product op basis van de ID

    if (!$product) {
        abort(404, 'Product not found'); // Geef een 404 als het product niet bestaat
    }

    return view('updateProduct', ['product' => $product]); // Geef het product door aan de view
});

Route::post('/updateProduct/{id}', function (Request $request, $id) {
    $product = Product::find($id);

    if (!$product) {
        abort(404, 'User not found');
    }

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->stock = $request->input('stock');
    $product->image = $request->input('image');
    $product->save();

    return redirect('/user/profile')->with('success', 'User updated successfully');
});

Route::get('/deleteProduct', function (Request $request) {
    $id = $request->query('id'); // Haal de 'id' query parameter op
    $product = Product::find($id); // Zoek de gebruiker op basis van de ID

    if (!$product) {
        abort(404, 'User not found'); // Geef een 404 als de gebruiker niet bestaat
    }

    $product->delete(); // Verwijder de gebruiker uit de database

    return redirect('/user/profile')->with('success', 'User deleted successfully');
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

Route::get('/createProduct', function () {
    return view('createProduct'); // resources/views/createProduct.blade.php
});

Route::post('/createProduct', function (Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'image' => 'required|string|max:255',
    ]);
    $product = new Product();
    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->stock = $validatedData['stock'];
    $product->image = $validatedData['image'];
    $product->save();

    return redirect('/user/profile')->with('success', 'Product created successfully');
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
    $user->password = bcrypt($validatedData['password']); 
    $user->save();

    return redirect('/user/profile')->with('success', 'User created successfully');
});

Route::get('/user/profile', [ProfileController::class, 'index']);

Route::get('/login', [LoginController::class, 'login']); // Toon de loginpagina
Route::post('/login', [LoginController::class, 'authenticate']); // Verwerk de login

// Route::get('/login', function () {
//     return view('login');
// })->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/order/{id}', function ($id) {
    $product = Product::find($id);

    if (!$product) {
        abort(404, 'Product not found');
    }

    return view('order', ['product' => $product]);
});

Route::post('/checkout', function (Request $request) {
    $productId = $request->input('product_id');
    $product = Product::find($productId);

    if (!$product) {
        abort(404, 'Product not found');
    }

    // Verwerk de bestelling (bijvoorbeeld opslaan in de database)
    return redirect('/thank-you')->with('success', 'Bestelling geplaatst!');
});
