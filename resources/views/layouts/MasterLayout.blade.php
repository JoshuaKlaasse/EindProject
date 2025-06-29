<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nederkwaliteit')</title>
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    <script src="{{ asset('js/faq.js') }}" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @yield('styles')
</head>
<body>
<header>
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
</header>
<main>
    @yield('content')
</main>
<footer>
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
</footer>
</body>
</html>