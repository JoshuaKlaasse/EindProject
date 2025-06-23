<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
    <link rel="stylesheet" href="{{ asset('css/search_results.css') }}">
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
    <h1>Zoekresultaten voor "{{ $query }}"</h1>

    @if($products->isEmpty())
        <p>Geen producten gevonden.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p>Prijs: €{{ number_format($product->price, 2) }}</p>
                    <img src="{{ asset('images/shirts/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>