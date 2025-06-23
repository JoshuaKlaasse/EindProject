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
<h1>Update product: {{ $product->name }}</h1>

<form method="POST" action="{{ url('/updateProduct/' . $product->id) }}">
    @csrf
    <label for="name">New name </label>
    <input type="text" id="name" name="name" value="{{ $product->name }}">
    <p>Old name: {{$product->name}}</p>
    <label for="price">New Price:</label>
    <input type="integer" id="price" name="price" value="{{ $product->price }}">
    <p>Old Price: {{$product->price}}</p>
    <label for="description">New description:</label>
    <input type="text" id="description" name="description" value="{{ $product->description }}">
    <p>Old description: {{$product->description}}</p>
    <label for="stock">New stock:</label>
    <input type="integer" id="stock" name="stock" value="{{ $product->stock }}">
    <p>Old stock: {{$product->stock}}</p>
    <label for="image">New image URL:</label>
    <input type="text" id="image" name="image" value="{{ $product->image }}">
    <p>Old image: <img src="{{ asset('/images/shirts/' . $product->image) }}" alt="Product Image" width="100"></p>
    <p>Old image URL: {{$product->image}}</p>

    <button type="submit">Update</button>
</form>
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