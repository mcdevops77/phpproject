<?php

include 'db_test.php';
if(isset($_POST['Submit'])){

echo '<pre>';
print_r($_POST);

$Make_type = $_POST['hw_make'];
$model = $_POST['hw_model'];
$hw_processor = $_POST['hw_processor'];
$ram = $_POST['hw_ram'];
$Hdd  = $_POST['hw_Hdd'];
$hwtype = $_POST['hw_type'];


$query = ("INSERT INTO tbl_hardwaredetails_master (hw_make, hw_model, hw_processor, hw_ram, hw_Hdd, hw_type) 
            VALUES('$Make_type', '$model', '$hw_processor', '$ram', '$Hdd', '$hwtype')");


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