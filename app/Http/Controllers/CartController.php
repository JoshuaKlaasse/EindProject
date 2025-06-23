<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Voeg product toe aan winkelwagen
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product niet gevonden.');
        }

        // Haal de huidige winkelwagen op uit de sessie
        $cart = session()->get('cart', []);

        // Controleer of het product al in de winkelwagen zit
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // Voeg het product toe aan de winkelwagen
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ];
        }

        // Sla de winkelwagen op in de sessie
        session()->put('cart', $cart);

        return redirect('/cart')->with('success', 'Product toegevoegd aan winkelwagen.');
    }

    // Toon winkelwagen
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', ['cart' => $cart]);
    }

    public function removeFromCart(Request $request)
{
    $productId = $request->input('product_id'); // Haal het product-ID op
    $cart = session()->get('cart', []); // Haal de huidige winkelwagen op

    if (isset($cart[$productId])) {
        unset($cart[$productId]); // Verwijder het product uit de winkelwagen
        session()->put('cart', $cart); // Sla de bijgewerkte winkelwagen op
    }

    return redirect('/cart')->with('success', 'Product verwijderd uit winkelwagen.');
}
}
