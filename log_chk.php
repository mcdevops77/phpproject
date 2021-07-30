<?php

// include_once 'db_test.php';
include_once 'dbconn.php';
#print_r($_POST);

$username = $_POST['UserName'];
$password = $_POST['Password'];
$user = isset($_REQUEST['asset_emp_username']) ? $_REQUEST['asset_emp_username'] : '';
$pass = md5($password);

$sql="SELECT * from tbl_user_login_details where asset_user_empid = '$username' and asset_user_passwd = '$pass'";

$result= mysqli_query($conn,$sql);
// print_r($result);

if (!$result) {
    die(mysqli_error($conn));
}
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$user = $row['asset_emp_username'];
		session_start();
		$_SESSION["loggedin"] = true;
	$_SESSION['asset_user_empid'] = "$username";
	$_SESSION['asset_user_passwd'] = "$pass";
	$_SESSION['asset_emp_username'] = "$user";
	}
	header("location: index.php");
}
 else{
	echo "<script>alert('Invalid login');</script>";
	echo "<script>document.location = 'login.php'; </script>";
 }


?>
