<?php 
// session_start();
$user = $_SESSION['asset_emp_username'];
 ?>
<html>
<head>
<title>MC-Assets Maintenance</title>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
</head>
<body>
	
<div class="main">
<div class="page-wrapper">
 <div class="banner-pan">
 	<img src="web_header.jpg">
 </div>

<header>
<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masters<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Assets<span class="caret"></span></a>
        <!-- <a class="test" tabindex="-1" href="#">Category<span class="caret"></span></a> -->
        <ul class="dropdown-menu">
          <!-- <li><a tabindex="-1" href="Monitors.php">Monitors</a></li> -->
          <li><a tabindex="-1" href="hardwaremasterC.php">Hardware Details</a></li>
          <li><a tabindex="-1" href="softwaremaster.php">Software Details</a></li>
          <li><a tabindex="-1" href="addEmployees.php">New Employee</a></li>
        </ul>
      </li>    
      </ul>
			</li>
			<li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=""></a></li>
                <li><a tabindex="-1" href="hardwareasset.php">Asset Transactions</a></li>
                <li><a tabindex="-1" href="servermain.php">Data Transactions</a></li>
               <li><a tabindex="-1" href="maintainence.php">Monitoring</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="auth.php">Stocks and Search</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
		  <li class="dropdown">
     <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <i class="fa fa-user"></i> </a> -->
     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span> Hi  Welcome <?php echo $user; ?>  <span class="caret"></span></a>
     <?php// echo ($_SESSION['asset_emp_username']); ?>
              <ul class="dropdown-menu">
                <!-- <li><a href="#">Profile</a></li> -->
                <li><a href="#" onclick="javascript:return confirm('Please Contact Site developer');">Change Password</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>