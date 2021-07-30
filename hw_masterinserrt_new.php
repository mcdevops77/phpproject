<?php

include 'db_test.php';
if(isset($_POST['Submit'])){

echo '<pre>';
print_r($_POST);
var_dump($_POST);


$hwtype = $_POST['hw_type'];
$servertype = $_POST['servertype'];
$Make_type = $_POST['hw_make'];
$model = $_POST['hw_model'];
$hw_processor = $_POST['hw_processor'];
$ram = $_POST['hw_ram'];
$Hdd  = $_POST['hw_Hdd'];
// $serialnumber = $_POST['serialnumber'];
$serialnumber = isset($_POST['serialno']) ? $_POST['serialno'] : '';
$status = $_POST['status'];

echo $query = ("INSERT INTO tbl_hardwaredetails_master_new (hw_category_type, server_type, hw_manufacture, hw_model, hw_processor, hw_ram, hw_Hdd, hw_serial_number, hw_status) 
            VALUES('$hwtype', '$servertype', '$Make_type', '$model', '$hw_processor', '$ram', '$Hdd', '$serialnumber', '$status')");


    if(mysqli_query($conn, $query)){

        echo "<script> window.alert('You have successfully inserted the Hardware');</script>";
        echo "<script>document.location = 'index.php'; </script>";
    } else{
        echo "<script>alert('Something Went wrong, Please try later');</script>";
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>