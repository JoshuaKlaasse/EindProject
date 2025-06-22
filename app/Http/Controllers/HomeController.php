<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Haal specifieke producten op
        $product1 = Product::find(1); // Product with ID 1
        $product2 = Product::find(2); // Product with ID 2
        $product3 = Product::find(4); // Product with ID 3
        $product4 = Product::find(5); // Product with ID 4
        $product5 = Product::find(6); // Product with ID 5
        $product6 = Product::find(7); // Product with ID 6
        $product7 = Product::find(8); // Product with ID 7
        $product8 = Product::find(9); // Product with ID 8
        $product9 = Product::find(10); // Product with ID 9
        $product10 = Product::find(11); // Product with ID 10
        $product11 = Product::find(12); // Product with ID 11
        $product12 = Product::find(13); // Product with ID 12

        // Geef de producten door aan de view
        return view('/Home', [
            'product1' => $product1,
            'product2' => $product2,
            'product3' => $product3,
            'product4' => $product4,
            'product5' => $product5,
            'product6' => $product6,
            'product7' => $product7,
            'product8' => $product8,
            'product9' => $product9,
            'product10' => $product10,
            'product11' => $product11,
            'product12' => $product12,

        ]);
    }
}