<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registreer</h1>
        <label><b>Voornaam</b></label><br>
        <input type="text" id="Email"><br>

        <label><b>Achternaam</b></label><br>
        <input type="text" id="achternaam"><br>

        <label><b>Email</b></label><br>
        <input type="text" id="Email" onblur="CheckEmail()"><br>

        <label><b>Inlognaam</b></label><br>
        <input type="text" id="inlognaam" onblur="Checkusername()"><br>
        <div id="Usercheck"></div>

        <label><b>wachtwoord</b></label><br>
        <input type="password" id="wachtwoord" onblur="Checkpassword()"><br>
        <div id="wachtwoordcheck"></div>

        <button onclick="register()" id="register">registreer</button>

</body>
</html>