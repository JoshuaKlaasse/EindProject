<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home/main.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    
</head>
<body>
    <div id="header">
  <div id="logo">
    <img src="../Images/logo.png" alt="logo" id="logo">
  </div>
  <nav class="navigation">
    <div class="header-links">
      <a href="login"><button class="btnlogin-popup">login</button></a>
      <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></button></a>
    </div>
  </nav>
</div>
        
    </div>
    <div id="main_content">
        <div id="sales">
            <div id="sales_header">
                <h1>Our sales</h1>
            </div>

            <div class="sales_product">
                <h2>{{$product1->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product1->image) }}" alt="Product 1" class="product_image">
                <p class="priceProduct">€{{$product1->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product1->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>

            <div class="sales_product">
                <h2>{{$product2->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product2->image) }}" alt="Product 2" class="product_image">
                <p class="priceProduct">€{{$product2->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product2->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>

            <div class="sales_product">
                <h2>{{$product4->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product4->image) }}" alt="Product 3" class="product_image">
                <p class="priceProduct">€{{$product4->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product4->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>
        </div>
        <div id="Popular_product">
            <div id="popular_description">
                <div id="popular_header">
                    <h1>Popular products</h1>
                </div>
                <div id=info>
                </div>
                <div class="popular_product">
                    <h2>{{$product3->name}}</h2>
                    <img src="{{ asset('/images/shirts/' . $product3->image) }}" alt="Product 1" class="product_image">
                    <p class="priceProduct">€{{$product3->price}}</p>
                    <form method="GET" action="{{ url('/order/' . $product3->id) }}">
                        <button type="submit" class="btn">Bestel nu</button>
                    </form>
                </div>
                <div class="popular_product">
                    <h2>{{$product5->name}}</h2>
                    <img src="{{ asset('/images/shirts/' . $product5->image) }}" alt="Product 2" class="product_image">
                    <p class="priceProduct">€{{$product5->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product5->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
                </div>
                <div class="popular_product">
                    <h2>{{$product6->name}}</h2>
                    <img src="{{ asset('/images/shirts/' . $product6->image) }}" alt="Product 3" class="product_image">
                    <p class="priceProduct">€{{$product6->price}}</p>
                    <form method="GET" action="{{ url('/order/' . $product6->id) }}">
                        <button type="submit" class="btn">Bestel nu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>              
  <div class="footer">
  <div class="motto">
    <p>© Nederkwaliteit – Expect the worst, and we will still find a way to disappoint you.</p>
  </div>
  <nav class="navigationfooter">
    <a href="frequent">FAQ</a>
    <a href="terms">TOS</a>
    <a href="about">About Us</a>
    
  </nav>
</div>
</body>
</html>