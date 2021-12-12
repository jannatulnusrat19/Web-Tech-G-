<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ExternalCSS/Login.css">
        <link rel="stylesheet" href="../ExternalCSS/Header.css">
        <link rel="stylesheet" href="../ExternalCSS/Footer.css">
        <script src="../js/Login.js"></script>
        <!-- <link rel="stylesheet" href="../ExternalCSS/Header.css"> -->
        
    </head>
<body>

<div class="nav">
<?php session_start();
include './Head.php';?>
</div>

<?php session_start();
require_once '../model/model.php';
$username = $password = "";
$Form_name = "";
$From_pass ="";
$flag =false;
$User_passwordEr = "";
$User_NameEr ="";
$User_typeEr= "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
if (empty($_POST["username"])) {
    $User_NameEr = "UserName is required";
    $flag = true;
}

if (empty($_POST["password"])) {
    $User_passwordEr = "password is required";
    $flag = true;
}
if (empty($_POST["userType"])) {
    $User_typeEr = "User type is required";
    $flag = true;
}

if(!$flag){
    $username =  input($_POST["username"]);
    $password = input($_POST["password"]);
    $userType = input($_POST["userType"]);
    if($userType=='Buyer')
    {
      $result =login($username,$password,$userType);
      if($result){
        $_SESSION["username"]=$username;
     echo "Success";
         header("Location:../view/BuyerHome.php");
     echo "Success";
    }
    else
    {
    echo "<br>";
    echo "Invalid Password ";}
    }
    
    else{
      echo "Invalid role!";
      echo "Only buyer can Join to this portal";
    }
    $_COOKIE['username'] = "";
    $_COOKIE['password'] = "";
    if(isset($_POST['remember'])){
        setcookie('username',$_POST['username'],time()+30);
        setcookie('password',$_POST['password'],time()+30);

  }


}
}
function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}


?>

</fieldset>


<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="login" onsubmit="return isValid()" name="LForm">
<div class="my-form">
Username:<input type = "text" id="Uname" name="username" value="<?php {if(isset($_COOKIE['username'])) echo $_COOKIE['username'];}?>">
<span id="usernamejsE" style="color: red;">* <?php echo $User_NameEr; ?> </span>
<br> 
Password :<input type = "password" id="Pass" name="password" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>" >
<span id="passwordjsE" style="color: red;">* <?php echo $User_passwordEr; ?> </span>
<br> 
User-Type: <br>
<select name="userType" id="userType">
<option value="">Select one</option>
            <option value="Admin">Admin</option>
            <option value="Buyer">Buyer</option>
            <option value="Seller">Seller</option>
            <option value="Rental">Tenant</option>
</select>
<span id="rolejsE" style="color: red;"> * <?php echo $User_typeEr;  ?> </span>
<br>
 
 <br>
<div class="remember">
<input type = "checkbox" name="remember">Remember me<br>
</div>
<input type = "submit" class="button" value="Login"><a class="active" href="../controller/ForgotPass.php">Forgot Password</a>
<br> <br>
<p> <strong>New here?</strong> <a class="active" href="./Registration.php">signup Now!</a> </p>
</div>
</form>
<?php
 echo $error;
 ?>
<br><br>

<fieldset>
<?php include './footer.php';?>
</fieldset>

</body></html>
