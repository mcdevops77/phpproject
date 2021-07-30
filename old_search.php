<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';
include_once 'header.php';

?>



<!-- <p align="center;font-size:16px;font-weight:bold;">Welcome to Mc-Asset Maintainence</p> -->
<p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-Asset Maintainence</p>
                
<form method="post" name="search" action="searchprocess.php" id="search" style="border-radius:15px; border:10px; padding:15px;">
    <p align="center"><img src="search.png">Search Form</p>
    <div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
      <tr>
        <td>Category</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="AssetCategory" id="AssetCategory">
                <option value=""></option>
                <option value="System">Systems</option>
                <option value="Servers">Servers</option>
                <option value="Monitors">Monitors</option>
                <option value="Desktops">Desktops</option>
                <option value="Keyboards">Keyboards</option>
              </select>
              </div>
        </td>
      </tr>
      <tr>
        <td>Belongs To</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="Assetbelongs" id="Assetbelongs">
                <option value=""></option>
                <option value="Eenadu">Eenadu</option>
                <option value="MC">MC</option>
                <option value="UKML">UKML</option>
                <option value="EtvB">EtvBharat</option>
                <option value="colorama">colorama</option>
              </select>
              </div>
        </td>
      </tr>
      <tr>
        <tr>
        <td>Device code</td>
        <td>
        <div class="form-group">
              <!-- <label> -->
                <input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control">
              <!-- </label> -->
              </div>
        </td>
      </tr>
    <tr>
        <td>Make Type</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="Make_type" id="Make_type">
                <option value=""></option>
                <option value="Hp">Hp</option>
                <option value="Dell">Dell</option>
                <option value="lenovo">lenovo</option>
                <option value="HCL">HCL</option>
                <option value="I-Ball">I-Ball</option>
                <option value="MAC">MAC</option>
              </select>
              </div>
            </td>
        </tr>
    <tr>
        <td>Model</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="model_type" id="model_type">
                <option value="1"></option>
                <option value="Dell -> 7040">Dell -> 7040</option>
                <option value="Dell -> 3040">Dell -> 3040</option>
                <option value="Dell -> 7070">Dell -> 7070</option>
                <option value="Dell -> 3020">Dell -> 3020</option>
                 <!--HCL MOdel-->
                 <option value="Core2Duo">Core 2 Duo</option> 
              </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>Registerd As</td>
        <td>
            <div class="form-group">
                <!-- <label> -->
                    <input type="text" name="Ast_reg_user" id="Ast_reg_user" class="form-control">
                <!-- </label> -->
            </div>
        </td>
      </tr>
      <tr>
      <td>Allocated Ipaddress</td>
      <td>
      <div class="form-group">
      <input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control">
      </div>
      </td>
      </tr>
  </tr>
</tbody>
</table>
<div class="button-centre">
    <!-- <input type="submit" name="Submit" value="Search Now"  align="center" class="btn btn-success"> -->
    <!-- <input type="submit" name="Submit" value=" Search Now"  align="center" class="button">  -->
    <!-- <span class="glyphicon glyphicon-search"></span>  -->
      <input type="submit" name="Submit" value=" Search Now"  align="center" class="btn btn-success">
</div>
</div>
</div>
<div>
<?php include "footer.php"?>
</div>
</form>





