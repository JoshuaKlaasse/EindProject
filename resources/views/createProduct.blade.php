<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
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
    <div class="form-container3">
    <h1>Add a New Product</h1>

    

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/createProduct') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description</label>
    <input type="text" id="description" name="description" required><br>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" required><br>

    <label for="stock">stock</label>
    <input type="number" id="stock" name="stock" required><br>

    <label for="image">Image URL</label>
    <input type="text" id="image" name="image" required placeholder="Enter image name"><br>

    <button type="submit">Aanmaken</button>
    <a href="{{ url('/user/profile') }}">Back to User List</a>
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
</body>
</html>
