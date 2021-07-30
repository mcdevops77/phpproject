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
<form method="post" name="Desktops" action="deskins.php" id="Desktops" style="border-radius:15px; border:10px; padding:15px;">
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
                <!-- <option value="User SystemConfig">System</option> -->
                <!-- <option value="Servers">Servers</option> -->
                <!-- <option value="Mobile Devices">Mobile Devices</option> -->
                <option value="Desktops">Desktops</option>
               <!--  <option value="Laptops">Laptops</option> -->
			  </select>
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
                <option value="Acer">Acer</option>
			  </select>
			  </div>
			</td>
		</tr>
    <tr>
        <td>Is Item Refundable</td>
        <td>
          <div class="form-group">
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="0">No
    </label>
</div>
</td>
</tr>
	<tr>
        <td>Desktop Serial No</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="desktop_serial_no">
				<!-- </label> -->
			</div>
		</td>
      </tr>
    </tbody>
  </table>
  
  <div class="button-centre">
		<input type="submit" name="Submit" value="Submit" align="center" class="btn btn-success" onclick="return emptyValidation()" required>
  </div>
<div>
  <!-- <a href="#" class="btn btn-info btn-lg">
     <span class="glyphicon glyphicon-plus" style="padding: 8px 12px; font-size: 14px;">AddNewDesktop</span> -->

  <!-- </a>  -->

<!--     <a href="#" class="btn btn-secondary"><i class="material-icons"></i><span align="left">Add New Desktop</span></a> -->
  </div>
</tbody>
</table>
</div>
</div>
</form>
<div style="prepend-2 span-13 append-4">
	<div class="col-sm-7" align="right">
</div>
</div>
<!-- <a href="asset_create.php" class="btn btn-secondary"><i class="material-icons"></i><span align="right">Add New Asset</span></a> -->

<?php include_once 'footer.php';?>