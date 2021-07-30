<?php

include 'db_test.php';

if(isset($_POST['Submit']))
var_dump($_POST);
print_r($_POST);
echo '<pre>';
// var_dump($_POST);

{
    $AssetCategory = $_POST['AssetCategory'];
    $Particular = $_POST['Particular'];
    $dvc_alloted = $_POST['dvc_alloted'];
    $monitoringtype = $_POST['maintype'];
    $monitoring_hwdetails = $_POST['hw_model'];
    $reg_ipaddress = $_POST['reg_ipaddress'];
    $serialnum = $_POST['serialnum'];
    $hardwareissue = $_POST['hw_issue'];
    $softwareissue = $_POST['sw_issue'];
    $purpose = $_POST['purpose'];
    $date = $_POST['changed_date'];
    $dcdate = strtotime($date);
    $dcdate = date("Y-m-d", $dcdate);
    
    $location = $_POST['location'];
    $working = $_POST['status'];

  echo  $query = ("INSERT INTO tbl_asset_monitoring (ast_monitoring_category, ast_monitoring_particular_server, ast_monitoring_name,  ast_monitoring_type, ast_monitoring_hw_model, ast_monitoring_ipaddress,
                       ast_monitoring_serialnum, ast_monitoring_hw_issue, ast_monitoring_sw_issue, ast_monitoring_change_purpose, ast_monitoring_changed_date, ast_monitoring_location, ast_monitoring_status)

                VALUES ('$AssetCategory', '$Particular', '$dvc_alloted',  '$monitoringtype', '$monitoring_hwdetails', '$reg_ipaddress', '$serialnum', '$hardwareissue', '$softwareissue',  '$purpose', '$dcdate',  '$location', '$working')");
          if(mysqli_query($conn, $query)){

        echo "<script> window.alert('You have successfully inserted the maintainence');</script>";
        echo "<script>document.location = 'index.php'; </script>";
    } else{
        echo "<script>alert('Something Went wrong, Please try later');</script>";
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>