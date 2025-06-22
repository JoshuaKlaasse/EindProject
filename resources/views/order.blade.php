<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestel {{ $product->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
</head>
<body>
      <div id ="header">
            <div id="logo">
                <img src="../Images/logo.png" alt="logo" id ="logo">
            </div>
            <nav class="navigation">
                <div class="header-links">
                <a href="login"><button class="btnlogin-popup">login</button></a>

                <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></img></button></a>
                </div>             
              </nav>
    </div>
    <div class="order-container">
        <h1 class="order-title">{{ $product->name }}</h1>
        <h3 class="Product-title">{{ $product->name }} Descritpion</h3>
        <div class="order-product">
            <img src="{{ asset('/images/shirts/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">Prijs: €{{ number_format($product->price, 2) }}</p>
                <form method="POST" action="{{ url('/checkout') }}" class="checkout-form">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="btn checkout-btn">Afrekenen</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>