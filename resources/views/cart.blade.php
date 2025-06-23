<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/header_footer.css"> 
</head>
<body>

<div id="header">
    <div id="logo">
        <a href="{{ url('/') }}">
            <img src="../Images/logo.png" alt="logo" id="logo">
        </a>
    </div>
    <div id="search">
        <form action="{{ url('/search') }}" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Zoek naar producten..." class="search-input" required>
            <button type="submit" class="search-button">
                <img src="../images/search.icon.png" alt="Search">
            </button>
        </form>
    </div>
      <nav class="navigation">
        <div class="header-links">
          <a href="login"><button class="btnlogin-popup">login</button></a>
          <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></button></a>
        </div>
    </nav>
</div>
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
</html>