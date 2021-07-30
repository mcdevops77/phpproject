<?php
$dbserver = "localhost";
$dbname = "mc_asset";
$dbuser = "root";
$dbpasswd = "";

$conn = mysqli_connect($dbserver, $dbuser, $dbpasswd);
// $conn = new mysqli($dbserver, $dbname,  $dbuser, $dbpasswd);
 mysqli_select_db($conn,'mc_asset');

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // echo "connection successfull";
?>