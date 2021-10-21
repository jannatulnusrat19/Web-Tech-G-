<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
<?php
session_start();
 include 'Head.php';
 $pass_error = "";
?>
</fieldset>
<table>
<td>
<fieldset style="height:270px;width:300px">
<h3>Account</h3> &nbsp &nbsp 
<hr/>
<ul>
<li><a href="Dashboard.php">Dashboard</a></li>
<li><a href="Profile.php">View Profile</a></li>
<li><a href="Edit.php">Edit Profile</a></li>
<li><a href="ChangePic.php">Change Profile Picture</a></li>
<li><a href="ChangePass.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
<fieldset>  
<form method="post">  
<legend>Change Password</legend>
<table>
<tr><td align = "left">Current Password</td><td align = "right">:<input type = "text" name = "curpass" value="<?php echo $_SESSION['passkey'];?>"><?php echo "$pass_error"?></td><br>
<tr><td align = "left"><span style = "color:green;">New Password</span></td><td align = "right">:<input type = "text" name="newpass"></td><br>
<tr><td align = "left"><span style = "color:red;">Retype New Password</span></td><td align = "right">:<input type = "text" name="rnewpass"></td>
</table>
<br>
<hr/>
<input type = "submit" name="submit">
</form>

</fieldset>
</fieldset>
</td>
</table>
<fieldset>
<?php include 'footer.php'?>
</fieldset>
</body>
</html>