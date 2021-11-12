<?php
$conn = new mysqli('localhost','root','','LabTask5');
if($conn -> connect_error){
    die('Connection Failed : '.$conn -> connectio_error);
}
else
{
    
    $DELETE="DELETE FROM `Delete1` WHERE `Displayable` = 'Yes'";
    $data=mysqli_query($conn, $DELETE);
    if($data){
        
    }
    else{
        echo "Failed to delete";
    }
  
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <div   class="container">
            <br>
            <fieldset>
            <h3>Delete Product</h3>
        <form action="" name="form" method="post">
            <label>Name: HTC</label>
            
            <br>
            <label>Buying Price: 34000</label>
            <br>
            <label>Selling Price: 37000</label>
            <br>
            <label>Displayable: Yes</label>
        
            <hr>
            
            <input type="submit" name="submit" value="Delete">
            <br>
            </fieldset>
        </form>

    </div>
 
    
</body>
</html>