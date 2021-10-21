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
 if(isset($_FILES['image'])){
    $imgErr= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
          echo "Choose JPG or PNG .";
      }
      
      if($file_size < 4097152){
        $imgErr[]='File size should be more than 4MB';
      }
      
      if(!empty($imgErr)==true){
         move_uploaded_file($file_tmp, $file_name);
         echo "Success";
      }
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
<legend>Change Profile Picture</legend>
<input type="file" name="image"  value="Choose File">
<hr/>
<input type="submit"  name="submit">
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