<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        // Haal de zoekquery op
        $query = $request->input('query');

        // Zoek naar producten in de database
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->get();

        // Retourneer de resultaten naar de view
        return view('search', ['products' => $products, 'query' => $query]);
    }
}