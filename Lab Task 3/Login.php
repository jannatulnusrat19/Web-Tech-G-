<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="ExternalCss/StyleSheet3.css">
    <style>
        .error {color: #FF0000;}
        a:hover{
     color:red;
 }
 .button:hover{
     background-color: yellow;
     color: red;
 }
 body{
     background-color: lavenderblush;
     margin: 10px;
     padding: 10px;
     
 }
 .my-form{
     background-color: lightblue;
     padding: 20px;
     padding-top: 150px;
     margin: auto;
     margin-top: 30px;
     border: purple 5px solid;
     width: 30%;
     height: 500px;
     text-align: center;  
 }
 .remember{
     text-align: left;
     padding-left: 90px;
     margin-left: 70px;
 }
 
 
 .container h1{
    color:purple;
    text-align: center;
    font-style: italic;
    text-transform: uppercase;
    text-decoration: underline;
}
.button{
    background-color: rebeccapurple;
    color: white;
    padding: 5px;
    border: none;
    text-align: left;
}

    </style>
</head>
<body>

<?php
 $usernameErr = $passwordErr = "";
 $username= $password = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST['username'])){
        $usernameErr = "Username is required";
     }
     else{
        $username = $_POST['username'];
         if (!preg_match("/^[a-zA-Z-' ]*$ _/",$username)) {
        $usernameErr = "Can contain a-z,A-Z,period,dash only";
            }
         else{
            $usernameErr="";
            }
        }
    if(empty($_POST["password"])) {
        $passwordErr = "Passowrd is required";
    }
    else
      {
        $password = $_POST["password"];
       if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
           $passwordErr = "Password must contain at least one special character and  must 8 characters password";
         else
           $passwordErr = "";
      
      }
    
   
      }
?>
   <div class="container">
            <h1>Login Form!</h1>
   </div>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="my-form">
        <div class="form-grp">
            <label for="">Username</label>
            <input type="text" name="username">
            <span class="error"> 
                    <?php 
                    if ($usernameErr){
                    echo $usernameErr;
                    }
            ?></span>
  <br><br>
        </div>
        <div class="form-grp">
        <br>
        <label for="">Password</label>
        <input type="text" name="password">
        <span class="error"> 
                    <?php 
                    if ($passwordErr){
                    echo $passwordErr;
                    }
            ?></span>
            <br>
        </div>
        
        <br>
        <div class="remember">
            <input type="checkbox"> Remember Me
            <br>
        </div>
        <br>
        <input class="button" type="submit" value="Submit"> <span><a href="#">Forgot Password?</a></span> 
         
    
   <div class="container2">
       <h4><a class="button" href="">About us</a></h4>
   </div>
   
</form>

        <?php
        echo $username,$password;
        ?>


</body>
</html>






