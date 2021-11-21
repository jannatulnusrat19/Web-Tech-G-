<html>
<body>
<fieldset>
<?php
session_start();
if(!isset($_SESSION["usname"]))
{
    header("Location:Login.php");
}
?>
<?php

 
 require_once '../model/model.php';
 $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info`  ";

 

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //return $rows;


 foreach($data as $row)
 {
	                             $_SESSION['usname'] = $row['usname'];
	                             $_SESSION['pass'] = $row['pass'];
	                             $_SESSION['name'] = $row['name'];
	                             $_SESSION['email'] = $row['email'];
									$_SESSION['pass']=$row['pass'];
									$_SESSION['gender']=$row['gender'];
									$_SESSION['dd']=$row['dd'];
									$_SESSION['mm']=$row['mm'];
									$_SESSION['yy']=$row['yy'];
								
									break;
	 
 }
						  ?>
</fieldset>
<table>
<td>
<fieldset style="height:270px;width:300px">
<h3>Account</h3> &nbsp &nbsp 
<hr/>
<ul>
<li><a href="../view/Dashboard.php">Dashboard</a></li>
<li><a href="../view/Profile.php">View Profile</a></li>
<li><a href="../controller/EditProfile.php">Edit Profile</a></li>
<li><a href="../controller/ChangePass.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
<fieldset>    
<legend>Profile</legend>
Name: <?php echo $_SESSION['name']; ?>
<?php echo "<br>" ?>
email: <?php echo $_SESSION['email']; ?>
<?php echo "<br>" ?>
username: <?php echo $_SESSION['usname']; ?>
<?php echo "<br>" ?>

Gender: <?php echo $_SESSION['gender'];?>
<?php echo "<br>" ?>

Date of Birth: <?php echo "".$_SESSION['dd']."/".$_SESSION['mm']."/".$_SESSION['yy'].""?>
</fieldset>
</fieldset>
</td>
</table>
</body>

</html>