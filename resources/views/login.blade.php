<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
   

    <div id ="header">
            <div id="logo">
                <img src="../Images/logo.png" alt="logo" id ="logo">
            </div>
            <a href="../views/login.html"><button class="button">Home</button></a>
    </div>
    
    <div id="container">
        
        <h1>Log in/Inloggen</h1>
        <label><b>inlognaam</b></label><br>
        <input type="text" id="inlognaam" onblur="Checkusername()"><br>
        <div id="Usercheck"></div>
        <label><b>wachtwoord</b></label><br>
        <input type="password" id="wachtwoord" onblur="Checkpassword()"><br>
        <div id="wachtwoordcheck"></div>
        <button onclick="login()" id="login">log in</button>

        <div id="otherlinks">
        <a draggable="false" href="../views/Home.blade.php">Register</a>
        <a draggable="false" href="../views/Home.blade.php">Forgot Password</a>
        </div>

    
        <div id="inloggen"></div>
        <div id="inlogcheck"></div>
        <div id="users"></div>
    </div>
    <script>
        function login()
        {   
            let username = document.getElementById('inlognaam').value;
            let password = document.getElementById('wachtwoord').value;

            console.log( username + "Probeert in te loggen");
            

            if( username == "Chris" & password == "DeltionGeheim123!")
            {
                console.log("Welkom " + username + " inloggen is gelukt");
                document.getElementById('inlogcheck').innerHTML = "Welkom " + username + " inloggen is gelukt";
                Userstable();
            }
            else
            {
                console.log("Inloggen mislukt!");
                document.getElementById('inlogcheck').innerHTML = "Inloggen mislukt!";
            }
            
        }
        function Checkusername()
        {
            let username = document.getElementById('inlognaam').value;
            if( username.length < 3 )
            {
                document.getElementById('inlognaam').style.border = "2px solid red";
                console.log("Gebruikersnaam moet 3 of meer karakters zijn");
                document.getElementById('Usercheck').innerHTML = "Gebruikersnaam moet 3 of meer karakters zijn";
            }
            if(username.length > 3){
                document.getElementById('Usercheck').innerHTML = "";
                document.getElementById('inlognaam').style.border = "2px solid green";

            }
        }
        function Checkpassword()
        {
            let password = document.getElementById('wachtwoord').value;
            if( password.length < 10 )
            {
                document.getElementById('wachtwoord').style.border = "2px solid red";
                console.log("wachtwoord moet 10 of meer karakters zijn");
                document.getElementById('wachtwoordcheck').innerHTML = "wachtwoord moet 10 of meer karakters zijn";
            }
            if(password.length > 10){
                document.getElementById('wachtwoordcheck').innerHTML = "";
                 document.getElementById('wachtwoord').style.border = "2px solid green";
            }
                
            
        }
        let jsonArrayBMICategories=[
            {"naam": "Chris",       "wachtwoord": "Deltion12345!!"},
            {"naam": "Kevin",       "wachtwoord": "Deltion45678!!"},
            {"naam": "Koos",        "wachtwoord": "DeltionX12345!"},
            {"naam": "Marloes",     "wachtwoord": "DeltionY45678!"},
            {"naam": "Ronald",      "wachtwoord": "DeltionZ12345!"},
        ];
        function Userstable()
        {
            let table ="<table border='1'>";
            table += "<tr><th>naam</th><th>wachtwoord</th></tr>";
            for (let i = 0; i < jsonArrayBMICategories.length; i++)
            {
                table += "<tr>";
                table += "<td>" + jsonArrayBMICategories[i].naam + "</td>";
                table += "<td>" + jsonArrayBMICategories[i].wachtwoord + "</td>";
                table += "</tr>";
            }
            table += "</table>";
            document.getElementById('users').innerHTML = table;
        }
        
      
    </script>
    <div id="footer">
    <p>&copy; 2025 Nederkwaliteit. All rights reserved.</p>
    <div id="Footerlinks">
            <a draggable="false" href="../frequent" id="FAQ">FAQ</a>
        </div>
</body>
</html>