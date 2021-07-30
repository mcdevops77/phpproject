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
<!-- <link href="/pract/b_test/screen.css" rel="stylesheet" type="text/css">
<link href="/pract/b_test/menu.css" rel="stylesheet" type="text/css"> -->

<style>
body{margin-top:20px; margin-bottom:20px;background-color:#EEEEEE;}
a {text-decoration:none;}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

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
<!-- <ul>
		<li><a href="" title="Home">Home</a></li>
	</ul> -->
	</div>
</div>
</div>

</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>



<p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-AssetManagement</p>

<div class="span-18">
</div>
</body>
</html>
