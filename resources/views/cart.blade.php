@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'Home - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('content') <!-- Vul de content placeholder -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}"> <!-- Voeg de CSS toe voor de home pagina -->
@endsection
    <div class="cart-container">
    <h1>Winkelwagen</h1>

    @if(empty($cart))
        <p>Je winkelwagen is leeg.</p>
    @else
        @php
            $totalPrice = 0; // Variabele om de totaalprijs te berekenen
        @endphp

        @foreach($cart as $productId => $product)
            <div class="cart-item">
                <img src="{{ asset('images/shirts/' . $product['image']) }}" alt="{{ $product['name'] }}">
                <div class="cart-details">
                    <h2>{{ $product['name'] }}</h2>
                    <p>Maat: {{ $product['size'] ?? 'M' }}</p> <!-- Voeg maat toe als beschikbaar -->
                    <p>Prijs: €{{ number_format($product['price'], 2) }}</p>
                    <p>Aantal: {{ $product['quantity'] }}</p>
                    @php
                        $totalPrice += $product['price'] * $product['quantity']; // Bereken totaalprijs
                    @endphp
                    <form method="POST" action="{{ url('/cart/remove') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $productId }}">
                        <button type="submit" class="remove-btn">Verwijder</button>
                    </form>
                </div>
            </div>
        @endforeach

        <!-- Totaalprijs weergeven -->
        <div class="cart-total">
            <h2>Totaalprijs: €{{ number_format($totalPrice, 2) }}</h2>
        </div>

        <!-- Knop om naar checkout te gaan -->
        <div class="checkout-button">
            <form method="GET" action="{{ url('/payment') }}">
                <button type="submit" class="btn">Ga naar afrekenen</button>
            </form>
        </div>
    @endif
</div>
</body>
@endsection