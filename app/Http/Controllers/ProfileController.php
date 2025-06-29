<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all(); // Haal alle gebruikers op
        $products = Product::all(); // Haal alle producten op

        return view('admin', compact('users', 'products')); // Geef beide datasets door aan de view
    }
}
