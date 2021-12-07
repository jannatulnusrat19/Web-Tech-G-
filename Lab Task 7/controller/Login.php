<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ExternalCSS/Login.css">
		<link rel="stylesheet" href="../ExternalCSS/Header.css">
        <link rel="stylesheet" href="../ExternalCSS/Footer.css">
		<!-- <link rel="stylesheet" href="../ExternalCSS/Header.css"> -->
        
    </head>
<body>

<div class="nav">
<?php session_start();
include '../Head.php';?>
</div>
<?php $name = $pass = $error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                              if($row['username']==$_POST['uname'] && $row['password']==$_POST['pass'])
							  {
									$_SESSION['flag'] = 1;
									$_SESSION['uname']=$_POST['uname'];
									$_SESSION['passkey']=$row['password'];
									header("location: BuyerHome.php");
									
									break;
							  }
							 
                          }  
						  if($_SESSION['flag']!=1) $error = "Invalid Username or Password";
						  
						  $_COOKIE['us'] = "";
						  $_COOKIE['password'] = "";
						  if(isset($_POST['remember'])){
							  setcookie('us',$_POST['uname'],time()+30);
							  setcookie('password',$_POST['pass'],time()+30);
						  }
                           
	
	 
	 }
 
 ?>
 
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="my-form">

Username:<input type = "text" name="uname" value="<?php {if(isset($_COOKIE['us'])) echo $_COOKIE['us'];}?>"><br>
<br>
Password:<input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>">
<br> <br>
<span class="error">
<?php
 echo $error;
 ?>
</span> 
 <br>
<div class="remember">
<input type = "checkbox" name="remember">Remember me<br>
</div>
<input type = "submit" class="button" value="Login"><a class="active" href="ForgotPass.php">Forgot Password</a>

</div>
</form>

<br><br>

<fieldset>
<?php include '../footer.php';?>
</fieldset>

</body></html>