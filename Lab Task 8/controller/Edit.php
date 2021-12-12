<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/Edit.js"></script>
   <link rel="stylesheet" href="../ExternalCSS/Edit.css">
   <link rel="stylesheet" href="../ExternalCSS/Header.css">
   <link rel="stylesheet" href="../ExternalCSS/Footer.css">


</head>
<body>
<div class="nav">

<?php
session_start();
include "./Head.php";
 require_once '../model/DB_connect.php';
 require_once '../model/model.php';
 
// if(!isset($_SESSION["username"]))
// {
//     header("Location:Login.php");
// }
  $updateSuccess = "";
  $updateFailed = "";
  $Password_not_match = "";
  $isValid = true;

  $name = "";
  $gender = "";
  $email = "";
  $username = "";
  $password = "";
  $cpass = "";

  $name_err = $email_err = $username_err = $pass_err = $cpass_err = $gender_err =$date_err= '';
  session_start();
  $username = $_SESSION['username'];

  $profile_data = getProfileData($username);
  for ( $i = 0; $i < count($profile_data); $i++)
  { 
          if($profile_data[$i]["username"] == $username)
          {
               
              $name = $profile_data[$i]['name'];
              $email = $profile_data[$i]['email'];
              $address = $profile_data[$i]['address'];
              $username = $profile_data[$i]['username'];
              $password = $profile_data[$i]['password'];
              $gender = $profile_data[$i]['gender'];
              $dd = $profile_data[$i]['dd'];
              $mm = $profile_data[$i]['mm'];
              $yy = $profile_data[$i]['yy'];
              $user_type = $profile_data[$i]['user_type'];
             
             
              $_SESSION['username'] = $username;// proflie id can't be change
          }
  }



if ($_SERVER['REQUEST_METHOD'] === "POST")
{

  
	$name= $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
    $address = $_POST['address'];
	$gender = $_POST['gender'];
	$dd= $_POST['dd'];
	$mm = $_POST['mm'];
	$yy= $_POST['yy'];
    $user_type= $_POST['user_type'];
   

   if(empty($name))
     {
        $name_err = "Firstname can not be empty.";
        $isValid = false;
     }
   if(strlen($name) > 15)
      {
        $name_err = "Firstname can not be > 15 Character..";
        $isValid = false;
     }


   if(empty($gender))
     {
        $gender_err = "Gender can not be empty.";
        $isValid = false;
     }
  if(strlen($gender) > 10)
      {
        $gender_err = "Gender can not be > 10 Character..";
        $isValid = false;
     }

   if(empty($email))
     {
        $email_err = "Email can not be empty.";
        $isValid = false;
     }
     if(strlen($email) > 30)
      {
        $email_err = "Email can not be > 30 Character..";
        $isValid = false;
     }

      if(empty($username))
     {
        $username_err = "Username can not be empty.";
        $isValid = false;
     }
     if(strlen($username) > 15)
      {
        $ssername_err = "Username can not be > 15 Character..";
        $isValid = false;
     }


  // empty validation for required field
  $name=basic_validation($name);  
  $gender=basic_validation($gender); 
  $email=basic_validation($email);  
//   $username=basic_validation($username); 
   


  // if pass php validation then can write file.
  if($isValid)
   {
       $res = updateProfile($name,$gender,$address,$email,$username,$dd, $mm, $yy, $_SESSION['username']);
    
        if($res) 
           {
              $updateSuccess = "Update Profile succesful.";

               session_start();
               $_SESSION['username'] =  $username; // update session id


           }

       else{ $updateFailed = "Update Profile Failed.";}
     }

}

// validate input
function basic_validation($data)
{
$data = trim($data);
$data = htmlspecialchars($data);
$data = stripcslashes($data);
return $data;
}

?>
</div>
    <div class="sidemenu">
<table>
<td>
<fieldset style="height:270px;width:300px">
<h2 style="text-align: center; margin-top:5px; text-decoration:underline">Account</h2> &nbsp &nbsp 
<hr/>
<ul style="list-style-type: none; padding-left:20px; margin-top:20px">
<li><a class="bh" href="../view/BuyerHome.php">Home</a></li>
<li><a class="bh" href="../view/Profile.php">View Profile</a></li>
<li><a class="bh" href="#">Edit Profile</a></li>
<li><a class="bh" href="./ChangePass.php">Change Password</a></li>
<li><a class="bh" href="../view/logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
<fieldset>    
<legend>Profile</legend>
<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" class="form" id="editform" method = "POST" onsubmit="return jsValid();">
Name:<input type="text"  name="name"value="<?php echo $name?>"><br>
<br>
Email: <input type="text" name="email"value="<?php echo $email?>"><br>
<br>
Address: <input type="text" name="address"value="<?php echo $address?>"><br>
<br>
Date of Birth:<input type="text" value="<?php echo "".$dd."/".$mm."/".$yy.""?>"><br>
<br>
User type: <input type="radio"  name="userType"value="admin" id="rolejsE" <?php if($userType=='admin') echo "checked";?>>Admin
<input type="radio"  name="userType"value="owner" id="rolejsE" <?php if($userType=='owner') echo "checked";?>>Owner
<input type="radio"  name="userType"value="tenant" id="rolejsE" <?php if($userType=='tenant') echo "checked";?>>Tenant
<input type="radio"  name="userType"value="buyer" id="rolejsE" <?php if($userType=='buyer') echo "checked";?>>Buyer
 <br> <br>
 <button type="submit" class="button">Update</button>
 <span style="color: green;"> <?php echo $updateSuccess; ?> </span>
 <span style="color: red"> <?php echo $updateFailed; ?> </span>

</fieldset>
</form>
</fieldset>

</td>
</table>
    </div>
    <br><br>
<fieldset>
<?php include './footer.php'?>
</fieldset>
</body>
</html>