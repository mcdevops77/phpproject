<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'dbconn.php';

if (isset($_POST['Submit']))
echo '<pre>';
print_r($_POST);
exit; {
	$id = (!empty($_POST['ast_id'])) ? $_POST['ast_id'] : '';
	
	$AssetCategory = $_POST['AssetCategory'];
	$Appli = $_POST['Applicable'];
	$Assetbelongs = $_POST['Assetbelongs'];
	$Assetdevicecode = $_POST['Assetdevicecode'];
	$Make_type = $_POST['Make_type'];
	$model = $_POST['model'];
	$hw_details = $_POST['hw_details'];
	$deviceserialno = $_POST['deviceserialno'];
	$OS = $_POST['OS'];
	$dvc_alloted = $_POST['dvc_alloted'];
	$item = $_POST['item'];	
	$reg_user = $_POST['reg_user'];
	$reg_ipaddress = $_POST['reg_ipaddress'];
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

    if(!empty($id)){
        // UPDATE RECORDS
 $sql = ("UPDATE tbl_assets_new_td SET Ast_category='$AssetCategory',  Applicable='$Appli', Ast_belongs='$Assetbelongs',  Ast_dvc_code='$Assetdevicecode', make_type='$Make_type', model='$model', hardware_details='$hw_details', 
    device_serial_no='$deviceserialno', OS='$OS', device_allocated='$dvc_alloted', is_item_refundable='$item', reg_user='$reg_user', Allocated_ipaddress='$reg_ipaddress', 
        dvc_recv='$ddate', dvc_put_to_user='$pdate', Ast_location='$Ast_location' where id='".$id."'");
    // $msg = "Data updated";
    echo "<script>alert('Data has been updated');</script>";
    }
}
?>