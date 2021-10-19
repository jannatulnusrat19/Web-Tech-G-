<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
     /* padding: 20px; */
     padding-top: 150px;
     margin: auto;
     margin-top: 30px;
     border: purple 5px solid;
     width: 30%;
     height: 500px;
     text-align: center; 
     
 }
 .my-form label{
      display: inline-block;
      padding: 3px 6px;
     text-align: left;
     width: 120px;
     vertical-align: top;
    
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
    margin-top: 15px;
}
    </style>
</head>
<body>
<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<h1 class='text-danger'>Enter Name</h1>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["conPass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"] ,
					
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <div class="container">
            <h1>Registration Form!</h1>
   </div>
 
 <div class="my-form">
  <label> Name:</label>  <input type="text" name="name">
  <br><br>
  <label> Email:</label> <input type="text" name="email">
  <br><br>
  <label> Username:</label> <input type="text" name="username">
  <br><br>
  <label> Password:</label> <input type="text" name="password">
  <br><br>
  <label> Confirm Password:</label> <input type="text" name="conPass">
  <br><br>
  <label> Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other  
  <br><br>
  <label> Date of Birth: </label> <input type="date" name="dob">
  <br><br>
  
  <input class="button" type="submit" value="Submit"> 
  </div>
</form>


</body>
</html>