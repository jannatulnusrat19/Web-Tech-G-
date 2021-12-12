<!doctype html>
<html>
    <head>
    
    <link rel="stylesheet" href="../ExternalCSS/Header.css">
    </head>
<body>
<span style="font-size:40px;color:white"><b>Your Home</b> &nbsp &nbsp &nbsp 


<?php
// session_start() ;
error_reporting(0);
// $home = "BuyerHome.php";
$login = "Login.php";
$registration = "Registration.php";
$aboutUs = "AboutUs.php";
$blank = "";
$logout = "logout.php";

 if(($_SESSION['username'])) {
    echo"Logged in as <a href=$blank>".$_SESSION['username']."</a>|<a href='$logout'>Logout</a>";
 
 }
 else {
    
    echo "<a href='$login'>Login</a>|<a href='$registration'>Registration</a>|<a href='$aboutUs'>About us</a>";
 }


?>
</body>
</html>