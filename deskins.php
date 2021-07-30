<?php

include 'dbconn.php';

if (isset($_POST['Submit'])) {
	// $Category = $_POST['AssetCategory'];
	$Make_type = $_POST['Make_type'];
	$optradio = $_POST['optradio'];
    $desktopserialno = $_POST['desktop_serial_no'];
    
    $sql = "INSERT INTO tbl_desktops ( make_type, is_item_refundable, desktop_serial_no) VALUES ('$Make_type', '$optradio', '$desktopserialno')";

    if($conn->query($sql) === TRUE) {
        echo " new record created successfully";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>