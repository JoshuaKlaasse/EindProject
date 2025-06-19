<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/header_footer.css"> 
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
    <div class="cart-container">
        
  <h1>Winkelwagen</h1>
  <div class="cart-item">
    <img src="product1.jpg" alt="Product 1">
    <div class="cart-details">
      <h2>Nederland Hoodie</h2>
      <p>Maat: M</p>
      <p>€39,95</p>
      <input type="number" value="1" min="1">
      <button class="remove-btn">Verwijder</button>
    </div>
  </div>

  <div class="cart-item">
    <img src="product2.jpg" alt="Product 2">
    <div class="cart-details">
      <h2>Chaos Tee</h2>
      <p>Maat: L</p>
      <p>€24,95</p>
      <input type="number" value="2" min="1">
      <button class="remove-btn">Verwijder</button>
    </div>
  </div>

  <div class="cart-summary">
    <p>Totaal: <strong>€89,85</strong></p>
    <button class="checkout-btn">Afrekenen</button>
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
                <a href="contact">Contact</a>
                
            </nav>
  </div>

</body>
</html>