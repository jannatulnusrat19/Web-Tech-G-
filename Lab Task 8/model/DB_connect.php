<?php 
function db_conn()
{
    $conn = new mysqli("localhost","root","","yourhome");
    if($conn->connect_errno){
       die("Failed To Connect");
   
}
return $conn;


}

   
?>
