<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ExternalCSS/WelcomePage.css">
    <link rel="stylesheet" href="./ExternalCSS/Header.css">
    <link rel="stylesheet" href="./ExternalCSS/Footer.css">
    
  
</head>
<body>
    <div class="container">
     <div class="nav">
     <?php include 'Head.php' ;?>
     </div>
     <form action="">
     <div class="heading">
         <h3>Find your future home here...</h3> <br>
         <h3>You can also sell your property here..</h3>
     <br><br>
     <div class="options">
         <label for="">Continue As:</label>
         <br> <br>
        <a class="button" href="./controller/Login.php"> Owner </a> <br> <br> <br>
        <a class="button" href="./controller/Login.php"> Tenant </a> <br> <br> <br>
        <a class="button" href="./controller/Login.php"> Buyer.. </a> <br> <br> <br>
       
     </div>
     </div>
     </form>
     
 <fieldset>
     <?php include 'footer.php' ;?>
 </fieldset>
     
     </div> 
      
 </body>
</html>