<?php

include_once 'db_test.php';

if(isset($_POST['Submit'])){

    echo '<pre>';
    var_dump($_POST);
print_r($_POST);

$transid = isset($_GET['id']) ? $_GET['id'] : ''; 
// print_r($transid);

// exit;


$AssetCategory = $_POST['AssetCategory'];
$Applicable = isset($_POST['Applicable']) ? $_POST['Applicable'] : '';
if($Applicable == "Userpc"){
	$emp_code = $_POST['emp_code'];
} else{
	$emp_code = $_POST['dvc_alloted'];
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




echo $sql = ("UPDATE tbl_asset_details SET Ast_category='$AssetCategory', Applicable='$Applicable', device_allocated='$emp_code', Ast_belongs='$Assetbelongs',  Ast_dvc_code='$Assetdevicecode',  
hardware_details='$hw_processor', device_serial_no='$deviceserialno', OS='$OS', 
is_item_refundable='$item', Allocated_ipaddress='$reg_ipaddress', dvc_recv='$ddate', dvc_put_to_user='$pdate', Ast_location='$Ast_location', ast_current_status='$status'  WHERE asset_detail_id='$transid'");

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Data has been updated');</script>";
	echo "<script>document.location = 'index.php'; </script>";

} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>