<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


include_once 'db_test.php';

if (isset($_POST['Submit']))
echo '<pre>';
var_dump($_POST);
print_r($_POST);
{
$AssetCategory = $_POST['AssetCategory'];
$Applicable = isset($_POST['Applicable']) ? $_POST['Applicable'] : '';
if($Applicable == "Userpc"){
	$emp_code = $_POST['emp_code'];
} else{
	$emp_code = $_POST['devicealtd'];
}
// $emp_code = isset($_POST['emp_code']);
// $dvc_alloted = isset($_POST['dvc_alloted']) ? $_POST['dvc_alloted'] : '';
$Assetbelongs = $_POST['Assetbelongs'];
$Assetdevicecode = $_POST['Assetdevicecode'];
$hw_processor = $_POST['hw_processor'];
$deviceserialno = $_POST['deviceserialno'];
$OS = $_POST['OS'];
$item = isset($_POST['item']) ? $_POST['item'] : '';	
$reg_ipaddress = $_POST['reg_ipaddress'];
    if($AssetCategory == "laptop"){
        $laptopaccessories = isset($_POST['laptopaccessories']) ? $_POST['laptopaccessories'] : '';
        $laptopoptions = isset($_POST['laptopoptions']) ? $_POST['laptopoptions'] : '';
        $laptopoptions_bag = isset($_POST['laptopoptions_bag']) ? $_POST['laptopoptions_bag'] : '';
        $laptopoptions_adapter = isset($_POST['laptopoptions_adapter']) ? $_POST['laptopoptions_adapter'] : '';
	}else{
		$laptopaccessorie ="";
		$laptopoptions="";
		$laptopoptions_bag ="";
		$laptopoptions_adapter = "";
	}
$dvc_recv = $_POST['dvc_recv'];
	// $DeviceReciviedOn=date('Y-m-d', strtotime($dvc_recv));
$ddate = strtotime($dvc_recv);
$ddate = date("Y-m-d", $ddate);

$put_to_user = $_POST['put_to_user'];
	// $puttoUser=date('Y-m-d', strtotime($put_to_user));
$pdate = strtotime($put_to_user);
$pdate = date("Y-m-d", $pdate);
$Ast_location = $_POST['Ast_location'];
$status = $_POST['status'];

if($AssetCategory == "laptop"){
    $query = ("INSERT INTO tbl_asset_details (Ast_category, device_allocated,  Ast_belongs,  Ast_dvc_code, hardware_details, device_serial_no, OS, 
    is_item_refundable,  Allocated_ipaddress, laptopwithacc, laptopoptions,  dvc_recv, dvc_put_to_user, Ast_location, ast_current_status)

                VALUES ('$AssetCategory', '$emp_code',  '$Assetbelongs',  '$Assetdevicecode', '$hw_processor', '$deviceserialno', '$OS',
                                 '$item', '$reg_user', '$reg_ipaddress', '$laptopaccessories', '$laptopoptions', '$ddate', '$pdate', '$Ast_location', '$status') ");

}

else{
 echo  $query = ("INSERT INTO tbl_asset_details (Ast_category, Applicable, device_allocated, Ast_belongs,  Ast_dvc_code,  hardware_details, device_serial_no, OS, 
        is_item_refundable, Allocated_ipaddress, dvc_recv, dvc_put_to_user, Ast_location, ast_current_status)

        VALUES ('$AssetCategory', '$Applicable', '$emp_code', '$Assetbelongs',  '$Assetdevicecode', '$hw_processor', '$deviceserialno', '$OS', '$item', '$reg_ipaddress', '$ddate', '$pdate', '$Ast_location', '$status') ");
        
        // echo "<script>alert('Data has been inserted');</script>";
    } 

	$result = mysqli_query($conn, $query);

	if($result){
			// header('location: index.php?msg='.$msg);
			// header("location: index.php?msg-".$msg);
			echo "<script>alert('Data has been inserted');</script>";
			echo "<script>document.location = 'index.php'; </script>";
		// echo "<script>alert('".$msg."');</script>";

		}else{
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
}
	exit;
mysqli_close($conn);


?>