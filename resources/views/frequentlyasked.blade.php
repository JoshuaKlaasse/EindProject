<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/FAQ.css">
    <link rel="stylesheet" href="../css/header_footer.css">
</head>
<body>
  
<div id="header">
  <div id="logo">
    <img src="../Images/logo.png" alt="logo" id="logo">
  </div>
  <nav class="navigation">
    <div class="header-links">
      <a href="login"><button class="btnlogin-popup">login</button></a>
      <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></button></a>
    </div>
  </nav>
</div>

<main class="faq-container">
  <h1>Veelgestelde Vragen (en een paar minder gestelde, maar wel geinige)</h1>

  <!-- FAQ blocks -->
  <div class="faq">
    <button class="faq-question">Do you steal my data?</button>
    <div class="faq-answer">Are Papa Smurf’s balls blue?</div>
  </div>

  <div class="faq">
    <button class="faq-question">Will you sell my info to aliens or telemarketers?</button>
    <div class="faq-answer">Only if they offer us a good deal. Like, 3 cows and a spaceship minimum.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Is my password safe with you?</button>
    <div class="faq-answer">Safer than your lunch in the office fridge. (Unless Jeff’s around.)</div>
  </div>

  <div class="faq">
    <button class="faq-question">Can I trust this website?</button>
    <div class="faq-answer">As much as you can trust a raccoon in your kitchen. We’re cute but chaotic.</div>
  </div>

  <div class="faq">
    <button class="faq-question">What happens if I break the rules?</button>
    <div class="faq-answer">We send your browser 100 popups of Rick Astley. Forever.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Can I use this service to commit crimes?</button>
    <div class="faq-answer">Sure, if your dream is to go to jail and share a bunk with a guy named “Meatloaf.”</div>
  </div>

  <div class="faq">
    <button class="faq-question">Do you track my location?</button>
    <div class="faq-answer">Only if you're near a Taco Bell, because we’re hungry.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Can I sue you?</button>
    <div class="faq-answer">Sure. Just know our legal team consists of a cat wearing a tie.</div>
  </div>

  <div class="faq">
    <button class="faq-question">What’s your refund policy?</button>
    <div class="faq-answer">If you find a receipt written in crayon, we'll talk.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Can I delete my data?</button>
    <div class="faq-answer">Yes, but we keep a backup... in our memories. (Just kidding. Or are we?)</div>
  </div>

  <div class="faq">
    <button class="faq-question">Do you use cookies?</button>
    <div class="faq-answer">Yes. Chocolate chip. Also browser cookies.</div>
  </div>

  <div class="faq">
    <button class="faq-question">What if I use this service while skydiving?</button>
    <div class="faq-answer">You’ll have bigger problems than lag.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Can I change the ToS?</button>
    <div class="faq-answer">Sure, just email it to us, and we’ll print it out and throw it in the fire.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Is there an age limit?</button>
    <div class="faq-answer">If you can read this without adult supervision, you're probably good.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Are these terms legally binding?</button>
    <div class="faq-answer">About as binding as a pinky promise from a squirrel.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Do you have customer support?</button>
    <div class="faq-answer">Yes. His name is Dave. He’s a pigeon with Wi-Fi.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Will you ever shut down the service?</button>
    <div class="faq-answer">Only if a comet hits, or we accidentally unplug the server to charge our phone.</div>
  </div>

  <div class="faq">
    <button class="faq-question">What if I don’t accept the Terms?</button>
    <div class="faq-answer">Then you get the same punishment as people who skip the intro to <i>Breaking Bad</i> — eternal shame.</div>
  </div>

  <div class="faq">
    <button class="faq-question">Is this GDPR compliant?</button>
    <div class="faq-answer">Our lawyers say "yes." Our Magic 8 Ball says "ask again later."</div>
  </div>

  <div class="faq">
    <button class="faq-question">Why do you collect so much data?</button>
    <div class="faq-answer">Because hoarding is fun and we’re building a digital dragon's nest.</div>
  </div>
</main>

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

<script>
  // Accordion effect
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const answer = button.nextElementSibling;
      button.classList.toggle('open');
      answer.classList.toggle('visible');
    });
  });
</script>