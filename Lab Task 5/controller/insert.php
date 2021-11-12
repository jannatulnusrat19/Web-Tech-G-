<?php
$name = $_POST['pName'];
$bprice = $_POST['bPrice'];
$SPrice = $_POST['sPrice'];

if(!empty($name)||!empty($bprice)||!empty($SPrice)) {
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "LabTask5";
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if(mysqli_connect_error()){
       die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   }
   else{
       $INSERT = "Insert into Product (Name, BuyingPrice, SellingPrice) values(?, ?, ?)";
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("sii", $name, $bprice, $SPrice);
       $stmt->execute();
       echo "New record inserted";
       $stmt->close();
       $conn->close();

   }
}
else{
    echo "All field are required!" ;
}
?>