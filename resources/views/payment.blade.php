<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Betaalmethode</title>
  <link rel="stylesheet" href="../css/header_footer.css">
  <link rel="stylesheet" href="../css/payment.css">
  <style>
  
  </style>
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
  <div class="container">
    <div class="left-box">
      <h2>Selecteer een betalingswijze</h2>
      <select>
        <option>iDEAL</option>
        <option>PayPal</option>
        <option>Creditcard</option>
        <option>Sofort</option>
      </select>

      <h2>FACTURERINGSGEGEVENS</h2>
      <div class="form-row">
        <div>
          <label>Voornaam</label>
          <input type="text" value="">
        </div>
        <div>
          <label>Achternaam</label>
          <input type="text" value="">
        </div>
      </div>

      <div class="form-row">
        <div>
          <label>Plaats</label>
          <input type="text" value="">
        </div>
        <div>
          <label>Postcode</label>
          <input type="text" value="">
        </div>
      </div>

      <label>Factureringsadres</label>
      <input type="text" value=" 
      ">

      <label>Factureringsadres, regel 2</label>
      <input type="text">

      <label>Land</label>
      <select>
        <option selected>Nederland</option>
      </select>

      <p>Als je factuuradres zich niet in Nederland bevindt, stel dan de <a href="#"><b>voorkeur voor je winkelregio</b></a> in.</p>

      <div class="checkbox-label">
        <input type="checkbox" id="save">
        <label for="save">Bewaar mijn betalingsgegevens voor toekomstige betalingen</label>
      </div>

      <p>Je krijgt de kans om je bestelling te bekijken voordat deze wordt geplaatst.</p>

      <button class="submit-button">Doorgaan</button>
    </div>

    <div class="right-box">
      <h2>BETALINGSWIJZEN</h2>
      <p>Wij accepteren de volgende veilige betalingswijzen:</p>
      <div class="payment-icons">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Ideal_logo.png" alt="iDEAL">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Skrill_Logo.svg" alt="Skrill">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Bitcoin_Logo.svg" alt="Bitcoin">
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
