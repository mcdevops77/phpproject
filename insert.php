<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';

if (isset($_POST['Submit']))
echo '<pre>';
// var_dump($_POST);
print_r($_POST);
{
	$id = (!empty($_POST['ast_id'])) ? $_POST['ast_id'] : '';
	
	$AssetCategory = $_POST['AssetCategory'];
	$Applicable = isset($_POST['Applicable']) ? $_POST['Applicable'] : '';
	$Assetbelongs = $_POST['Assetbelongs'];
	$Assetdevicecode = $_POST['Assetdevicecode'];
	$Make_type = $_POST['Make_type'];
	$model = $_POST['model'];
	$hw_details = $_POST['hw_details'];
	$deviceserialno = $_POST['deviceserialno'];
	$OS = $_POST['OS'];
	$dvc_alloted = isset($_POST['dvc_alloted']) ? $_POST['dvc_alloted'] : '';
	$item = isset($_POST['item']) ? $_POST['item'] : '';	
	// $reg_user = $_POST['reg_user'];
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
	// $id = $_POST['ast_id'];

	// if(!empty($id)){
	// 		// UPDATE RECORDS
	//  $sql = ("UPDATE tbl_assets_new_td SET Ast_category='$AssetCategory',  Applicable='$Applicable', Ast_belongs='$Assetbelongs',  Ast_dvc_code='$Assetdevicecode', make_type='$Make_type', model='$model', hardware_details='$hw_details', 
    //     device_serial_no='$deviceserialno', OS='$OS', device_allocated='$dvc_alloted', is_item_refundable='$item', reg_user='$reg_user', Allocated_ipaddress='$reg_ipaddress', 
	// 		dvc_recv='$ddate', dvc_put_to_user='$pdate', Ast_location='$Ast_location' where id='".$id."'");
	// 	// $msg = "Data updated";
	// 	// echo "<script>alert('Data has been updated');</script>";		
	// 	$msg = "Data has been updated";
	// }

	if($AssetCategory == "laptop"){
		$sql = ("INSERT INTO tbl_assets_td_new (Ast_category, Applicable, Ast_belongs,  Ast_dvc_code, make_type, model, hardware_details, device_serial_no, OS, device_allocated, 
		is_item_refundable, reg_user, Allocated_ipaddress, laptopwithacc, laptopoptions,  dvc_recv, dvc_put_to_user, Ast_location)

					VALUES ('$AssetCategory', '$Applicable', '$Assetbelongs',  '$Assetdevicecode', '$Make_type', '$model', '$hw_details', '$deviceserialno', '$OS',
									'$dvc_alloted', '$item', '$reg_user', '$reg_ipaddress', '$laptopaccessories', '$laptopoptions', '$ddate', '$pdate', '$Ast_location') ");

	}
	
	else{

	 $sql = ("INSERT INTO tbl_assets_td_new (Ast_category, Applicable, Ast_belongs,  Ast_dvc_code, make_type, model, hardware_details, device_serial_no, OS, device_allocated, 
	 			is_item_refundable, Allocated_ipaddress, dvc_recv, dvc_put_to_user, Ast_location)
 
		VALUES ('$AssetCategory', '$Applicable', '$Assetbelongs',  '$Assetdevicecode', '$Make_type', '$model', '$hw_details', '$deviceserialno', '$OS',
		'$dvc_alloted', '$item', '$reg_ipaddress', '$ddate', '$pdate', '$Ast_location') ");
		// $msg = "Data has been Inserted";

		$msg = "Data inserted Successfully";
		echo "<script>alert('Data has been inserted');</script>";
	}

	$result = mysqli_query($conn, $sql);

	if($result){
			// header('location: index.php?msg='.$msg);
			// header("location: index.php?msg-".$msg);
			// echo "<script>alert('Data has been updated');</script>";
			echo "<script>document.location = 'usermain.php'; </script>";
		// echo "<script>alert('".$msg."');</script>";

		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	exit;
mysqli_close($conn);

?>

