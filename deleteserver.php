<?php

include_once 'db_test.php';

if(isset($_REQUEST['id'])){
    
    $serid =  isset($_GET['id']) ? $_GET['id'] : '';

   echo $sql = "DELETE from tbl_application_server_master WHERE id='$serid'";

   $result = mysqli_query($conn, $sql);

   if($result){
       echo "<script>alert('Data has been deleted');</script>";

   } else{
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
?>