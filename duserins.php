<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';

if (isset($_POST['Submit'])){
echo '<pre>';
// var_dump($_POST);
print_r($_POST);

$employeeid = $_POST['employeeid'];
$AssetCategory = $_POST['AssetCategory'];
$Assetbelongs = $_POST['Assetbelongs'];
$Assetdevicecode = $_POST['Assetdevicecode'];
$Make = $_POST['Make'];
$model_type = $_POST['model_type'];

$reg_ipaddress = $_POST['reg_ipaddress'];


echo $sql = ("INSERT INTO usersync_tbl (employee_user_id, Asset_category, Asset_belongs, Asset_device_code, make, model_type, Assigned_ipaddress) 
                    VALUES ('$employeeid', '$AssetCategory', '$Assetbelongs', '$Assetdevicecode', '$Make', '$model_type', '$reg_ipaddress' ) ");

        
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
        