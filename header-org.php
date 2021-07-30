<?php 
// session_start();
 ?>
<html>
<head>
<title>MC-Assets Maintenance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
              <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masters<span class="caret"></span></a>
              <ul class="dropdown-menu">
<!--                 <li><a href="#">Assets</a></li> -->     
                <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Category<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="Monitors.php">Monitors</a></li>
          <li><a tabindex="-1" href="sysservers.php">System & Servers</a></li>
          <!-- <li><a tabindex="-1" href="#">Mobiles</a></li> -->
          <li><a tabindex="-1" href="accessories.php">Accessories</a></li>
          <li><a tabindex="-1" href="laptops.php">Laptops</a></li>

        </ul>
      </li>    
      </ul>
			</li>
			<li class="dropdown">
              <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transactions <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=""></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="search.php">Search</a></li>
                <li><a href="stocks.php">stocks</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
		  <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['uname'];?> <i class="fa fa-user"></i> </a>
              <ul class="dropdown-menu">
                <!-- <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li> -->
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>