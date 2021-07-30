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
<title>MC-AssetManagement</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="/pract/b_test/screen.css" rel="stylesheet" type="text/css">
<link href="/pract/b_test/menu.css" rel="stylesheet" type="text/css">

<style>
body{margin-top:20px; margin-bottom:20px;background-color:#EEEEEE;}
a {text-decoration:none;}
</style>
</head>
<body>
<div class="container" style="border: 1px solid #999999; margin-bottom:20px;">
<div class="span-24">
<img src="web_header.jpg" width="950" height="250">
</div>
<br>
<nbsp></nbsp>
<nbsp></nbsp>

<div class="span-24">
	<div class="span-24">
   <div id="underlinemenu">
<ul>
		<li><a href="index.php" title="Home">Home</a></li>
	</ul>
	</div>
</div>
</div>
<div class="span-5 border">
	<!-- <a href="" class="leftnav">Dashboard</a> -->
	<a href="asset_pg.php" class="leftnav">Assets</a>
	<a href="" class="leftnav">Category</a>
	<a href="search.php" class="leftnav">Search</a>
	<a href="" class="leftnav">Tools</a>
	<a href="logout.php" class="leftnav">Logout</a>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
<div class="span-19 last">
</div>
<div style="prepend-1 span-18 last">
</div>
<p>&nbsp;</p>
<p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-AssetManagement</p>

<div class="span-18">
</div>
</body>
</html>
