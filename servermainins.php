<?php

include_once 'db_test.php';

if (isset($_POST['Submit']))
echo '<pre>';
var_dump($_POST);
print_r($_POST);{

    // $id = (!empty($_POST['ast_id'])) ? $_POST['ast_id'] : '';
	
	$server = $_POST['server'];
	$appli_servername = isset($_POST['appli_servername']) ? $_POST['appli_servername'] : '';
	$Particular = $_POST['Particular'];
	$Assetserialno = $_POST['Assetserialno'];
    $reg_ipaddress = $_POST['reg_ipaddress'];
    $sec_ipaddress = $_POST['sec_ipaddress'];
    $application_DBname = $_POST['application_DBname'];
    $apacheversion = $_POST['apache_version'];
    $dbversion = $_POST['DBversion'];
    $appli_sustainby = $_POST['appli_sustainby'];
    $remarks = $_POST['remarks'];
    $server_status = $_POST['status'];


  echo  $sql = ("INSERT INTO  tbl_application_server_master (appli_server, appli_praticular_server, appli_server_name, appli_server_serialno, appli_server_ipaddress, appli_server_sec_ipaddress, appli_server_project_main_db, 
                           appl_server_apache_version, appl_server_db_version, appli_project_handledby, Remarks, server_status)
                VALUES ('$server', '$Particular', '$appli_servername', '$Assetserialno', '$reg_ipaddress',  '$sec_ipaddress',  '$application_DBname', '$apacheversion', '$dbversion',  '$appli_sustainby', '$remarks', '$server_status')");

            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('You have successfully inserted the data');</script>";
                echo "<script>document.location = 'index.php'; </script>";
            } else{
                echo "<script>alert('Something Went wrong, Please try later');</script>";
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    mysqli_close($conn);
?>