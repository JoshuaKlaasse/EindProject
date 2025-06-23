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
<h1>Update Gebruiker: {{ $user->name }}</h1>

<form method="POST" action="{{ url('/update/' . $user->id) }}">
    @csrf
    <label for="name">New username: </label>
    <input type="text" id="name" name="name">
    <p>Old username: {{$user->name}}</p>
    <label for="email">New Email:</label>
    <input type="email" id="email" name="email">
    <p>Old Email: {{$user->email}}</p>
    <label for="password">New password:</label>
    <input type="text" id="password" name="password" >
    <p>Old password: {{$user->password}}</p>

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