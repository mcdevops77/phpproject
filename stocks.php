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
<form method="post" name="stocks" action="stocksinsert.php" id="" style="border-radius:15px; border:10px; padding:15px;">
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
                <option value="Keyboards">Keyboards</option>
                 <option value="Mouse">Mouse</option>
                <option value="Ram">RAM</option>
                <option value="Desktops">Desktops</option>
                <option value="Systems">Systems</option>
			  </select>
			  </div>
		</td>
      </tr>
      <tr>
        <td>Model</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="model" id="model">
				<option value=""></option>
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
        <td>Make Type</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="Make_type" id="Make_type">
				<option value=""></option>
                <option value="Hp">Hp</option>
             	<option value="Dell">Dell</option>
          		<option value="lenovo">lenovo</option>
                <option value="HCL">HCL</option>
                <option value="Mac">Mac</option>
                <option value="Logistic">Logistic</option>
                <option value="DDR2-2GB">DDR2-2GB</option>
                <option value="DDR3-2GB">DDR3-2GB</option>
                <option value="DDR2-4GB">DDR2-4GB</option>
                <option value="DDR3-4GB">DDR3-4GB</option>
			  </select>
			  </div>
			</td>
		</tr>
    <tr>
        <td>Is In Stock</td>
        <td>
          <div class="form-group">
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1">In Stock
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="0">Out Stock
    </label>
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
    </tbody>
  </table>
  
  <div class="button-centre">
		<input type="submit" name="Submit" value="Submit" align="center" class="btn btn-success" onclick="return accvalidation()" required>
  </div>
<div>
  <!-- <a href="accessories.php" class="btn btn-info btn-lg"> -->
    <!-- <span class="glyphicon glyphicon-plus" style="padding: 8px 12px; font-size: 14px;">AddNewaccessories</span> -->

  </a>

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