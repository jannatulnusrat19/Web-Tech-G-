<?php
 

if(isset($_POST['submit'])){
    $name = $_POST['pName'];
    $bprice = $_POST['bPrice'];
    $SPrice = $_POST['sPrice'];
//$cb = $_POST['cbox'];
//Database Connection
        $conn = new mysqli('localhost','root','','LabTask5');
        if($conn -> connect_error){
            die('Connection Failed : '.$conn -> connection_error);
        }
        else
        {
            $UPDATE="UPDATE 'Product' SET  'Name'='$_POST[pName]' , 'BuyingPrice'='$_POST[bPrice]' , 'SellingPrice'='$_POST[sPrice]' WHERE 'Name'='$_POST[pName]' ";
            $UPDATE_run= mysqli_query($conn, $UPDATE);
            if($UPDATE_run){
                echo ' <script type= "text/javascript">alert("Data updated")</script>';
            }
            else{
                echo ' <script type= "text/javascript">alert("Data not updated")</script>';
            }
        }
    }

?>