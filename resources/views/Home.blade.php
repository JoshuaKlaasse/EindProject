<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home/main.css">
    <link rel="stylesheet" href="../css/home/header.css">
    <link rel="stylesheet" href="../css/home/footer.css">
</head>
<body>
    <div id="header">
        <div id="logo">
            <img src="../Images/logo.png" alt="logo" id="logo">
        </div>
        <div id="search_bar">
            <form action="../search" method="get" id="search_form">
                <input type="text" name="query" placeholder="Search...">
                <button type="submt" id="search_icon">
                    <img src="../Images/search.icon.png" alt="Search" id="search_icon_image">
                </button>
            </form>
        </div>
        <a href="../login"><button class="button" style="margin-right: 150px">Log in</button></a>
        <a href="../cart"><button class="button"><img src="../images/cart.png" id="cart"></button></a>
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
    <div id="footer">
        <p>&copy; 2025 Nederkwaliteit. All rights reserved.</p>
        <div id="Footerlinks">
                <a draggable="false" href="../frequent" id="FAQ">FAQ</a>
        </div>
    </div>
</body>
</html>