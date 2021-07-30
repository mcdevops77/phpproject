<?php
$db_host = "localhost";
$db_name = "mc_asset";
$db_user = "root";
$db_passwd = "";
$conn = mysqli_connect($db_host, $db_user, $db_passwd);
 mysqli_select_db($conn,'mc_asset');
if($conn === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>