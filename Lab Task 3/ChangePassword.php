<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
     padding: 20px;
     padding-top: 150px;
     margin: auto;
     margin-top: 80px;
     border: purple 5px solid;
     width: 30%;
     height: 300px;
     text-align: center;    
 }
 .button{
    background-color: rebeccapurple;
    color: white;
    padding: 5px;
    border: none;
    text-align: left;
}
.container h1{
    color:purple;
    text-align: center;
    font-style: italic;
    text-transform: uppercase;
    text-decoration: underline;
    margin-top: 50px;
}
.my-form label{
    display: inline-block;
    padding: 3px 6px;
    text-align: right;
    vertical-align: top;
    width: 150px;

}
.new{
    color: blue;
}
.renew{
    color: brown;
}
.error {color: #FF0000;}
        a:hover{
     color:red;
 }
    </style>
</head>
<body>
<?php
  $currPass = "turn@19"; $new_pass = $Rnew_pass = $passwordErr1 = $passwordErr2 = $passwordErr3 ="";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	if(empty($_POST["currPass"]))
		$passwordErr1 = "Current password required";
	else{
	if($currPass!=$_POST["currPass"])
		$passwordErr2 = "Invalid Current Password";
		
	else{
		if($_POST["Rnew_pass"]==$_POST["new_pass"])
			{echo "Password changed successfully!";
		$currPass = $_POST["Rnew_pass"];$passwordErr3 = "";}
		else
			echo "Password doesn't match!";
	}
	}
	
}?>



    <div class="container">
        <h1>Change Password!</h1>
</div>
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" >
    <div class="my-form">
        <label> Current Password: </label> 
        <input type="text" name="currPass"> <br>
        <span class="error"> 
                    <?php 
                    if ($passwordErr1){
                    echo $passwordErr1;
                    }
                    else{
                     echo $passwordErr2;
                    }
            ?></span>
  
        <label class="new"> New Password: </label>
        <input type="text" name="new_pass"> <br>
        <span class="error"> 
                    <?php 
                    if ($passwordErr3){
                    echo $passwordErr3;
                    }
            ?></span>
            
        <label class="renew"> Retype New Password: </label>
        <input type="text" name="Rnew_pass"> <br>
        <span class="error"> 
                    <?php 
                    if ($passwordErr3){
                    echo $passwordErr3;
                    }
            ?></span>
        
        <br>
        <input class="button" type="submit" value="Submit">

    </div>
</form>


</body>
</html> 
 
