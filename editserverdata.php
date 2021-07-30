<?php

include_once 'db_test.php';

if(isset($_POST['Submit'])){

    echo '<pre>';
    var_dump($_POST);
print_r($_POST);
    $serid =  isset($_GET['id']) ? $_GET['id'] : '';
    
    $server = isset($_POST['server']) ? $_POST['server'] : '';
    $praticular = $_POST['Particular'];
	$appli_servername = isset($_POST['appli_servername']) ? $_POST['appli_servername'] : '';
    // $hardware_processor = isset($_POST['hardware_processor']) ? $_POST['hardware_processor'] : '';
	// $Assetdevicecode = $_POST['Assetdevicecode'];
	// $Make = $_POST['Make'];
	// $model = $_POST['model_type'];
	// $hw_details = $_POST['hw_details'];
	// $deviceserialno = $_POST['deviceserialno'];
	// $OS = $_POST['OS'];
	// $dvc_alloted = isset($_POST['dvc_alloted']) ? $_POST['dvc_alloted'] : '';
    // $item = isset($_POST['item']) ? $_POST['item'] : '';	
    $reg_ipaddress = isset($_POST['reg_ipaddress']) ? $_POST['reg_ipaddress'] : '';
    $sec_ipaddress = isset($_POST['sec_ipaddress']) ? $_POST['sec_ipaddress'] : '';
    $application_DBname = isset($_POST['application_DBname']) ? $_POST['application_DBname'] : '';
    $appli_sustainby = isset($_POST['appli_sustainby']) ? $_POST['appli_sustainby'] : '';
    $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : '';
    $server_status = $_POST['status'];

  echo  $sql = ("UPDATE tbl_application_server_master SET appli_server='$server', appli_praticular_server='$praticular',  appli_server_name='$appli_servername',  appli_server_ipaddress='$reg_ipaddress', appli_server_sec_ipaddress='$sec_ipaddress', appli_server_project_main_db='$application_DBname', 
                appli_project_handledby='$appli_sustainby', Remarks='$remarks', server_status='$server_status' where id='$serid'");


    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Data has been updated');</script>";
        echo "<script>document.location = 'index.php'; </script>";

    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>