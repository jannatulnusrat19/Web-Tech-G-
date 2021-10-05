<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="ExternalCss/StyleSheet3.css">
    <style>
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
   <div class="container">
            <h1>Login Form!</h1>
   </div>
       <form action="" class="my-form">
        <div class="form-grp">
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div class="form-grp">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
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


</body>
</html>