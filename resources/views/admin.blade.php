<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
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
                <a href="login"><button class="btnlogin-popup">login</button></a>

                <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></img></button></a>
                </div>             
              </nav>

    </div>
<h1>Admin Panel</h1>
<a href="create">Create Users</a>
<?php
//Database read for users
$users = DB::table('users')->get(); // Selects all users

echo "<table border='1'>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Email Verified At</th>";
echo "<th>Password</th>";
echo "<th>Created At</th>";
echo "<th>Updated At</th>";
echo "<th> update </th>";
echo "<th> delete </th>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user->id . "</td>";
    echo "<td>" . $user->name . "</td>";
    echo "<td>" . $user->email . "</td>";
    echo "<td>" . $user->email_verified_at . "</td>";
    echo "<td>" . $user->password . "</td>";
    echo "<td>" . $user->created_at . "</td>";
    echo "<td>" . $user->updated_at . "</td>";
    echo "<td><a href='update'>Update</a></td>";
    echo "<td><a href='delete'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>


tests

<?php ?>
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