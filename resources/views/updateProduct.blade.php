<link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/admin.css">
<div id ="header">
            <div id="logo">
                <img src="../Images/logo.png" alt="logo" id ="logo">
            </div>
            <nav class="navigation">
                <div class="header-links">
                <a href="http://127.0.0.1:8000/login"><button class="btnlogin-popup">login</button></a>

                <a href="http://127.0.0.1:8000/cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></img></button></a>
                </div>             
              </nav>

    </div>
<div class="form-container2">  
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