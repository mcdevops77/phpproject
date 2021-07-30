
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<head>
<title>MC-Assets Maintenance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	

<div class="main">
<div class="page-wrapper">
 <div class="banner-pan">
 	<img src="web_header.jpg">
 </div>
<!-- //banner -->
<?php include 'header.php';?>
<!-- //header -->









</div>
<!-- //Content pan -->




<!-- footer -->
<?php include 'footer.php';?>
<!-- //footer -->

</div>
<!-- //main -->




<!-- script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
