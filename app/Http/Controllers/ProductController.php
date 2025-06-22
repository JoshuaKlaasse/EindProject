<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(string $bla, Request $request, Product $products)
    {
        $products = Product::all(); // Haal alle producten op
        return view('user.profile')->with('products', $products->all());
        
    }
}