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
        <button id="sidebar_button" onclick="toggleSidebar()">
            <img src="../Images/sidebar.png" alt="Toggle Sidebar" id="sidebar_icon">
        </button>
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
                <h2>Product 1</h2>
                <img src="../Images/product1.jpg" alt="Product 1" class="product_image">
                <p class="priceProduct">€19.99</p>
            </div>

            <div class="sales_product">
                <h2>Product 2</h2>
                <img src="../Images/product2.jpg" alt="Product 2" class="product_image">
                <p class="priceProduct">€29.99</p>
            </div>

            <div class="sales_product">
                <h2>Product 3</h2>
                <img src="../Images/product3.jpg" alt="Product 3" class="product_image">
                <p class="priceProduct">€39.99</p>
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
                    <h2>Shirt</h2>
                    <img src="../Images/productA.jpg" alt="Product A" class="product_image">
                    <p class="priceProduct">€49.99</p>
                </div>
            </div>

        </div>
    </div>              
    <div id="footer">
    <p>&copy; 2025 Nederkwaliteit. All rights reserved.</p>
    <div id="Footerlinks">
            <a draggable="false" href="../frequent" id="FAQ">FAQ</a>
    </div>
</body>
</html>