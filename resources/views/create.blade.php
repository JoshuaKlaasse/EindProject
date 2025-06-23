<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
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
    <div class="form-container">
    <h1>Add a New User</h1>

    <a href="{{ url('/user/profile') }}">Back to User List</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/create') }}">
    @csrf
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Aanmaken</button>
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
