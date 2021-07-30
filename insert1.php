<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';
// print_r($_POST);
// if (isset($_POST['Submit'])) {
if (isset($_POST['Submit'])) {
	$Assetbelongs = $_POST['Assetbelongs'];
	$AssetCategory = $_POST['AssetCategory'];
	$Assetdevicecode = $_POST['Assetdevicecode'];
	$Assetmodel = $_POST['Assetmodel'];
	$Ast_hw_details = $_POST['Ast_hw_details'];
	$Assetdeviceserialno = $_POST['Assetdeviceserialno'];
	$Ast_dvc_alloted = $_POST['Ast_dvc_alloted'];
	$Ast_reg_user = $_POST['Ast_reg_user'];
	$Ast_reg_user_ipaddress = $_POST['Ast_reg_user_ipaddress'];
	$Ast_dvc_recv = $_POST['Ast_dvc_recv'];
	$Ast_location = $_POST['Ast_location'];

$sql = ("INSERT INTO tbl_assets (Ast_belongs, Ast_category, Ast_dvc_code, Ast_model, Ast_hw_details, Ast_dvc_serialno, Ast_dvc_alloted, Ast_reg_user, Ast_reg_user_ipaddress, Ast_dvc_recv, Ast_location) 
		VALUES ('$Assetbelongs', '$AssetCategory', '$Assetdevicecode', '$Assetmodel', '$Ast_hw_details', '$Assetdeviceserialno', '$Ast_dvc_alloted', '$Ast_reg_user', '$Ast_reg_user_ipaddress', 
		'$Ast_dvc_recv', '$Ast_location' )");

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('You have successfully inserted the data');</script>";
		// echo "<script> document.location ='view.php'; </script>";
		echo "<script> document.location ='index.php'; </script>";
	} else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

	echo "$sql";

	// if ($sql) {
	// 	echo "<script>alert('You have successfully inserted the data');</script>";
 //    	 // echo "<script > document.location ='index.php'; </script>";
	// }
	// else{
		// echo "<script>alert('Something Went wrong, Please try later');</script>";
	// }
	exit;
}
mysqli_close($conn);

 ?>