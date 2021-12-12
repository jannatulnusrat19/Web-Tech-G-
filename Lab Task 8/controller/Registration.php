<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../ExternalCSS/Registration.css">
<link rel="stylesheet" href="../ExternalCSS/Header.css">
<link rel="stylesheet" href="../ExternalCSS/Footer.css">
</head>
<body>
<div class="nav">
<?php
session_start();
 include './Head.php';?>
 </div>
<br><br>

<?php
session_start();
require_once '../model/model.php';
 ?>
</fieldset>
<?php  
 $message = '';   
 $error='';

 $name_err = $email_err = $username_err = $pass_err = $cpass_err = $gender_err =$user_typeEr=$date_err= '';
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $name_err = "Name is required";  
      }
    else {
  $EmptyArr = str_word_count($_POST['name']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$_POST['name']) || $EmptyArr<2) 
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
    
    
  }
       if(empty($_POST["email"]))  
      {  
           $email_err = "Email is required";  
      }  
    else {
    
    // check if e-mail address is well-formed
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
      
    }
  }
       if(empty($_POST["username"]))  
      {  
           $username_err = "Username is required";  
      }  
       if(empty($_POST["password"]))  
      {  
           $pass_err = "Password is required";  
      }
    else{
      if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST['pass']))
      
        $pass_err = "Password is invalid";
      else
        $pass_err = "";}
       if(empty($_POST["cpass"]))  
      {  
           $cpass_er = "Confirm password filed cannot be empty";  
      } 
    else{
      if($_POST["cpass"]!=$_POST["pass"])
        $cpass_err = "Mismatched password.. Try again.";
    }
       
       if(!isset($_POST["gender"]))  
      {  
           $gender_err = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
      if(empty($_POST["userType"]))  
      {  
           $user_typeEr = "User type is required";  
      }
       
      else  
      {  
          
if (isset($_POST['submit'])) {
     $data['username'] = $_POST['username'];
     $data['name'] = $_POST['name'];
     $data['email'] = $_POST['email'];
     $data['address'] = $_POST['address'];
     $data['pass'] = $_POST['pass'];
     $data['gender'] = $_POST['gender'];
     $data['userType'] = $_POST['userType'];
     $data['dd'] = $_POST['dd'];
     $data['mm'] = $_POST['mm'];
     $data['yy'] = $_POST['yy'];
    
 
 
   if (addUser($data)) {
    // echo '<script>alert("Your Data added Successfuly")</script>';
       
   }
 } else {
     echo '<script> alert("You are not allowed to access this page.")</script>' ;
 }

      }  
 }  
 }
 ?>

 <center><h2 style="height:50px; margin: 30px; line-height:50px">New here? Register now & find your future home</h2></center>
<form action = "" method = "post">
    <div class="details">

<table>
<tr class="required"><td>Name</td><td>:<input type = "text" id="namejsE" name="name" class="form-control"><span class="error"><?php echo $name_err;?></span></br></td></tr>

<tr class="required"><td>Email</td><td>:<input type = "text" id="emailjsE" name="email" class="form-control"><span class="error"><?php echo $email_err;?></span></br></td></tr>

<tr><td>Address</td><td>:<input type = "text" name="address" class="form-control"></br></td></tr>

<tr class="required"><td>Username</td><td>:<input type = "text" id="usernamejsE" name="username" class="form-control"><span class="error"><?php echo $username_err;?></span></br></td><tr>

<tr class="required"><td>Password</td><td>:<input type = "password" id="passwordjsE" name="password" class="form-control"><span class="error"><?php echo $pass_err;?></span></br></td></tr>

<tr><td>Confirm Password</td><td>:<input type = "password" name="cpass" class="form-control"><span class="error"><?php echo $cpass_err;?></span></br></td></tr>
</table>

<legend class="required" id="genderjsE">Gender</legend>
<input type = "radio" name="gender" value="Male">Male&nbsp <input type = "radio" name="gender" value="Female">Female&nbsp <input type = "radio" name="gender" value="Other">Other
<span class="error"><?php echo $gender_err;?></span>

<legend class="required" id="rolejsE">User Type</legend>
<input type = "radio" name="userType" value="Admin">Admin&nbsp <input type = "radio" name="userType" value="Owner">Owner&nbsp <input type = "radio" name="userType" value="Seller">Seller&nbsp <input type = "radio" name="userType" value="Buyer">Buyer
<span class="error"><?php echo $user_typeEr;?></span>


<legend>Date of Birth:</legend>
<input type = "text" name = "dd" width=100>/&nbsp <input type = "text" name = "mm" width=100>/&nbsp <input type = "text" name="yy" width=100> (dd/mm/yyyy)</fieldset>

<br><br>
<input type = "submit" class="button" name="submit">&nbsp &nbsp <button type="reset" class="button" value="Reset">Reset</button>

</form>
<?php echo $message;
echo $error;
  ?>
  </div>
  
  <br><br>
  <fieldset>
  <?php include './footer.php'?>
  </fieldset>
</body>
</html>