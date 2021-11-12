<?php
$name = " ";
//$buyingprice = " ";
//$sellingprice = " ";

$conn = new mysqli('localhost','root','','LabTask5');
$sql = "SELECT * FROM Profit ORDER BY 'Name' DESC";
$result = $conn->query($sql);


if(isset($_POST['submit'])){
    if(isset($_POST['submit'])){
        $buyingprice= $_POST['BuyingPrice'];
        $sellingprice = $_POST['SellingPrice'];
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container col-6">
    <br/>
        <form name="submit" action="">
            <h4>Display</h4>
        <table class="table-bordered table col">
            <thead>
            <tr>
                <td>Name </td>
                <td> Profit</td>
                <td colspan="2">Operation</td>
            </tr>

            </thead>
            <?php while($rows=$result->fetch_object()) { ?>
            <tbody>
                <td><?php echo $rows->Name ?></td>
                <td><?php echo $rows ->Profit; ?></td>
                <td><a href="editProduct.php">edit</a> <a href="deleteProduct.php">delete</a></td>
            </tbody>
          <?php  
         // $i++;
           }
           ?>
            
        </table>
        </form>
    </div>
</body>
</html>