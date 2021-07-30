<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';

if (isset($_POST['Submit'])) {
	// $Category = $_POST['AssetCategory'];
	$Make_type = $_POST['Make_type'];
	$optradio = $_POST['optradio'];
	$desktopserialno = $_POST['desktop_serial_no'];


$sql = ("INSERT INTO tbl_desktops (Category, make_type, is_item_refundable, desktop_serial_no) 
		VALUES ('$Category', '$Make_type', '$optradio', '$desktopserialno') ");


	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('You have successfully inserted the data');</script>";
		// echo "<script> document.location ='view.php'; </script>";
		// echo "<script> document.location ='index.php'; </script>";
	} else{
		echo "<script>alert('Something Went wrong, Please try later');</script>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

	echo "$sql";
	exit;
}
mysqli_close($conn);
 ?>