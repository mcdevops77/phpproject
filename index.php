<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!-- //banner -->
<?php include 'header.php';?>
<!-- //header -->
<!--Content pan -->


<div>
	<p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-Asset Maintainence</p> 
</div>
<div style="font-weight:bold; text-align:center" >
    <p> Your IPAddress is <?php include 'ipadd.php'; ?> </p>
</div>

<div style="font-weight:bold; text-align:center" class="blink" >
<style>
    <?php include 'css/blink.css'; ?>
</style>
    <span id="time"></span>
</div>

<!--//Content pan -->
<!-- footer -->
<?php include 'footer.php';?>

