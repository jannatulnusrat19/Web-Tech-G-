<! doctype html>
<html>
    <head>
      <style>
          .button:hover{
     background-color: yellow;
     color: red;
     
 }
 .button{
     padding: 5px;
     background-color: orange;
     font-weight: bolder;
 }
 body{
     background-color: lavenderblush;
     margin: 50px;
     padding: 10px;
     
 }
 .container h1{
    color:purple;
    text-align: center;
    font-style: italic;
    text-transform: uppercase;
    text-decoration: underline;
}
.my-form{
     background-color: lightblue;
     padding: 20px;
     padding-top: 150px;
     margin: auto;
     margin-top:50px;
     border: purple 5px solid;
     width: 30%;
     height: 300px;
     text-align: center;  
 }
 .image{
     text-align: left;
     text-size-adjust: 20px;
     font-weight: bolder;
 }
      </style>
    </head>
<body>
<?php
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

<form action="" method="POST" enctype="multipart/form-data">
<div class="container">
            <h1>Profile Picture!</h1>
   </div>
   <div class="my-form">
   <img src="/image/Profilepic.png" alt="Profile photo" class="image">
   <br><br>
   <input type="file" name="image" /><br>
   
         <br>
         <input class="button" type="submit" value="Upload"> 
         </div>
</form>


</body>
</html>