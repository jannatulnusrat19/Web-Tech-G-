<html>
<body>
<fieldset>
<?php
session_start();
 include 'Head.php'?>
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
<?php echo "Welcome ".$_SESSION['uname']."";?>
</fieldset>
</td>
</table>
<fieldset>
<?php include 'footer.php'?>
</fieldset>

</body>
<html>
