<!doctype html>
<html>
<body>
<span style="font-size:40px;color:green"><b>X</b></span><span style="font-size:25px">Company</span> &nbsp &nbsp &nbsp 
<?php
$home = "PublicHome.php";
$login = "Login.php";
$registration = "Registration.php";
$blank = "";
$logout = "logout.php";
 if(!($_SESSION['flag']))
	echo "<a href='$home'>Home</a>|<a href='$login'>Login</a>|<a href='$registration'>Registration</a>";
else 
	echo"Logged in as <a href=$blank>".$_SESSION['uname']."</a>|<a href='$logout'>Logout</a>";
?>
</body>
</html>