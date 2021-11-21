<html>
<body>
<fieldset>
<?php
session_start();
if(!isset($_SESSION["usname"]))
{
    header("Location: Login.php");
}
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
<li><a href="EditProfile.php">Edit Profile</a></li>
<li><a href="ChangePass.php">Change Password</a></li>
<br><br>

</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px ; width: 350px">
<br><br><br><br>
<?php echo "Welcome  ".$_SESSION['usname']."";?>
<br><br><br>
<hr>
<button a href="logout.php">Logout</button>
</fieldset>

</td>
</table>


</body>
</html>
