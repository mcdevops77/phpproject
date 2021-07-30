<?php
	include("db_test.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = mysqli_real_escape_string($conn, $_POST['UserName']);
		$password = mysqli_real_escape_string($conn, $_POST['Password']);
		
		$sql = "select * from tbl_user where uname = '$username' and pwd = '$password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		if($count == 1) {
			// session_register("username");
			echo ""; $_SESSION['username'] = $username;
			
			header("location:index.php");
		}else {
			$error = "your login name or password is not vaild";
		}
		
	}
?>