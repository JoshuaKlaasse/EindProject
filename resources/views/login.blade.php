<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
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
    
    <div class="wrapper">
        <div class="form-box login">
            <h2>Inloggen</h2>
            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="input-box">
                   <span class="icon">
                      <ion-icon name="mail-outline"></ion-icon>
                   </span>
                   <input type="email" required>
                   <label>Email</label>
                </div>

                <div class="input-box">
                   <span class="icon">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                   </span>
                   <input type="password" required>
                   <label>Password</label>
                </div>
                

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

            </form>                
            <div class="login-register">
                <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </div>
    </div>
    <div class="form-box register">
            <h2>Registration</h2>
            <form method="POST" action="#">

                <div class="input-box">
                   <span class="icon">
                      <ion-icon name="mail-outline"></ion-icon>
                   </span>
                   <input type="text" required>
                   <label>Username</label>
                </div>

                <div class="input-box">
                   <span class="icon">
                      <ion-icon name="mail-outline"></ion-icon>
                   </span>
                   <input type="email" required>
                   <label>Email</label>
                </div>

                <div class="input-box">
                   <span class="icon">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                   </span>
                   <input type="password" required>
                   <label>Password</label>
                </div>
                

                <div class="remember-forgot">
                    <label><input type="checkbox">I Agree to the terms and conditions</label>
                </div>

                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>     
            </form>       
</div>

                    

        
        

    
        
    </div>
    
        <script src="../js/login.js"></script>
</body>
</html>