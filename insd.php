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
    
    $emp_code = isset($_POST['emp_code']) ? $_POST['emp_code'] : '';;
    $Make = isset($_POST['Make']) ? $_POST['Make'] : '';
    
    $model_type = isset($_POST['model_type']) ? $_POST['model_type'] : '';

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

    $sql = ("INSERT INTO tbl_assets_td_new (Ast_category, Applicable, Ast_belongs,  Ast_dvc_code, make_type, model, hardware_details, device_serial_no, OS, device_allocated, 
    is_item_refundable, Allocated_ipaddress, dvc_recv, dvc_put_to_user, Ast_location)

            VALUES ('$AssetCategory', '$Applicable', '$Assetbelongs',  '$Assetdevicecode', '$Make_type', '$model', '$hw_details', '$deviceserialno', '$OS',
                            '$dvc_alloted', '$item', '$reg_ipaddress', '$ddate', '$pdate', '$Ast_location') ");
    
    

    $sql = ("INSERT INTO usersync_tbl (employee_user_id, Asset_category, Asset_belongs, Asset_device_code, make, model_type, Assigned_ipaddress) 
                    VALUES ('$emp_code', '$AssetCategory', '$Assetbelongs', '$Assetdevicecode', '$Make', '$model_type', '$reg_ipaddress' ) ");

        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            // echo "<script>document.location = 'index.php'; </script>";
        }
        else{
            echo "<script>alert('Something Went wrong, Please try later');</script>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>


