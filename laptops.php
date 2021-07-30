<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include_once 'db_test.php';
include_once 'header.php';
// if(!isset($_session)) 
// {
// //	session_start();
// } else {
// 	header("Location:index.php");
// } 
?>
<form method="post" name="laptops" action="laptopinsert.php" id="laptops" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
      <!-- <tr>
        <td>Category</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="AssetCategory" id="AssetCategory">
				<option value=""></option>
                <option value="laptop">Laptops</option>
                 <option value="Mouse">Mouse</option>
                <option value="Ram">RAM</option> -->
			  <!-- </select>
			  </div>
		</td>
      </tr> -->
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
                <!-- <option value="Mac">Mac</option>
                <option value="Logistic">Logistic</option>
                <option value="DDR2-2GB">DDR2-2GB</option>
                <option value="DDR3-2GB">DDR3-2GB</option>
                <option value="DDR2-4GB">DDR2-4GB</option>
                <option value="DDR3-4GB">DDR3-4GB</option> -->
			  </select>
			  </div>
			</td>
		</tr>
    <tr>
        <td>Model</td>
        <td>
			<div class="form-group">
			  <select class="form-control custom-select-sm" name="models" id="models">
				<option value=""></option>
                <option value="Hp">HP Spectre x360 LTE</option>
             	<option value="HP Pavilion Gaming">HP Pavilion Gaming</option>
          		<option value="HP Pavilion-14-ce3065tu">HP Pavilion-14-ce3065tu</option>
                <option value="Dell Latitude 15 351">Dell Latitude 15 3510</option>
                <option value="Dell Latitude 14 3410">Dell Latitude 14 3410</option>
                <option value="HCL">HCL</option>
                <!-- <option value="DDR2-2GB">DDR2-2GB</option>
                <option value="DDR3-2GB">DDR3-2GB</option>
                <option value="DDR2-4GB">DDR2-4GB</option>
                <option value="DDR3-4GB">DDR3-4GB</option> -->
			  </select>
			  </div>
			</td>
		</tr>
    <tr>
        <td>Hardware Details</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="hw_details" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
    	<tr>
        <td>Serial No</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="serial_no" class="form-control">
				<!-- </label> -->
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
  <td>Laptop with Accessiories</td>
  <td>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Given with All Laptop Accessiories</label>
  <br>
    <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Not Given with All Laptop Accessiories</label>
</div>
  </td>
  </tr>
  <tr>
  <td>Device Recivied On</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="dvc_recv" id="DeviceReciviedOn" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
	  <tr>
	  	<td>Put To User On</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="put_to_user" id="puttoUser" class="form-control">
				<!-- </label> -->
			</div>
		</td>
  </tr>
  <tr>
        <td>Registerd As</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="reg_user" id="reg_user" class="form-control">
				<!-- </label> -->
			</div>
		</td>
  </tr>
    </tbody>
  </table>
  
  <div class="button-centre">
		<input type="submit" name="Submit" value="Submit" align="center" class="btn btn-success" onclick="return avalidation()" required>
  </div>
<div>
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
<script>
 $('#DeviceReciviedOn').datepicker({
          dateFormat : 'dd-mm-yy',
          changeMonth: true,
          changeYear: true
  });
  $('#puttoUser').datepicker({
            dateFormat : 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
  });
</script>
<?php include_once 'footer.php';?>