<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us – Nederkwaliteit</title>
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
  <h1>Over Ons – Nederkwaliteit™</h1>

  <div class="faq">
    <button class="faq-question">Who We Are</button>
    <div class="faq-answer">
      We’re an energetic & slightly chaotic duo making clothes that are *just barely* good enough to wear — but always full of character.
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Our Mission</button>
    <div class="faq-answer">
      We’re not chasing perfection. We’re making clothes that put a little joy into your day — without draining your bank account.
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Our Story</button>
    <div class="faq-answer">
      It all started with a bold idea over a beer: “Why don’t we start a clothing brand?” We had zero experience, but maximum enthusiasm. Now here we are — with clothes that sometimes fall a little short… and we’re proudly honest about that.
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">What We Do</button>
    <div class="faq-answer">
      <ul>
        <li>We design clothes with jokes (and occasionally flags).</li>
        <li>We sell stuff that looks better in photos than IRL.</li>
        <li>We drop limited items — because mass production is so 2020.</li>
      </ul>
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Meet the Team</button>
    <div class="faq-answer">
      <p><strong>Joshua</strong> – Founder & idiot number 1</p>
      <p><strong>Dylan</strong> – Co-founder & idiot number 2</p>
      <p><strong>Mike</strong> – The guy who left the group on the first day</p>
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Why Us?</button>
    <div class="faq-answer">
      <ul>
        <li>You’re into local brands with guts.</li>
        <li>You respect fashionable nonsense.</li>
        <li>Every purchase comes with a little bit of chaos — and a lot of personality.</li>
      </ul>
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Contact & Social</button>
    <div class="faq-answer">
      <p>Instagram & TikTok: <a href="#">@nederkwaliteit</a></p>
      <p>Email: <a href="mailto:infonederkwaliteit@gmail.com">infonederkwaliteit@gmail.com</a></p>
    </div>
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

<script>
  // Zelfde accordion-effect als in je FAQ
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const answer = button.nextElementSibling;
      button.classList.toggle('open');
      answer.classList.toggle('visible');
    });
  });
</script>

</body>
</html>