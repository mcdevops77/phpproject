<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'header.php';
?>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>

<!-- <body onload="document.form1.text1.focus()"> -->

<form method="post" name="assets" action="insert.php" id="assets" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
      <tr>
        <td>Category</td>
        <td>
			<div class="form-group" id="AssetCategory">
			  <select class="form-control" name="AssetCategory" id="AssetCategory">
				<option value=""></option>
                <option value="System">Systems</option>
                <option value="Servers">Servers</option>
                <option value="Monitors">Monitors</option>
                <option value="laptop">laptop</option>
              <optgroup label="Accessories">
                <option value="Keyboards">Keyboards</option>
                <option value="Mouse">Mouse</option>
                <option value="RAM">RAM</option>
              </optgroup>
			  </select>
			  </div>
		</td>
      </tr>
	  <tr id="Applicable">
	  <td> Applicable For</td>
	  <td>
	  <div class="form-group">
	  <label class="radio-inline">
      <input type="radio" name="Applicable"  value="1">User Pc
    </label>
    <label class="radio-inline">
      <input type="radio" name="Applicable" value="0">As Server
    </label>
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
                <option value="EtvB">EtvB</option>
                <option value="colorama">colorama</option>
			  </select>
			  </div>
		</td>
      </tr>
      <tr id="devicecode">
        <td>Device code</td>
        <td>
		<div class="form-group">
			  <!-- <label> -->
			  	<input type="text" name="Assetdevicecode" id="devicecode" class="form-control" >
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
			  <select class="form-control" name="model" id="model">
				<option value=""></option>
                <option value="Dell -> 7040">Dell -> 7040</option>
                <option value="Dell -> 3040">Dell -> 3040</option>
                <option value="Dell -> 7070">Dell -> 7070</option>
                <option value="Dell -> 3020">Dell -> 3020</option>
                 <!--HCL MOdel-->
                 <option value="Core2Duo">Core 2 Duo</option> 
				 <!-- server hp -->
				 <option value="Prolaint ML G5">Prolaint ML G5</option>
				 <option value="Prolaint ML G6">Prolaint ML G6</option>
         <option value="dell latitude">dell latitude</option>
         <!-- Ram models -->
         <option value="DDR2-2GB">DDR2-2GB</option>
         <option value="DDR3-2GB">DDR3-2GB</option>
         <option value="DDR2-2GB">DDR2-4GB</option>
         <option value="DDR4-4GB">DDR4-4GB</option>
         <option value="DDR2-1GB">DDR2-1GB</option>
			  </select>
			</div>
		</td>
	</tr>
	<tr>
        <td>Hardware Details</td>
        <td>
			<div class="form-group">
			
					<input type="text" name="hw_details" class="form-control">
				
			</div>
		</td>
      </tr>
      <tr>
        <td>Device Serialno</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="deviceserialno" id="deviceserialno" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
        <td>Operating System</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="OS" id="OS">
				<option value=""></option>
                <option value="Windows-7">Windows-7</option>
               	<option value="Windows-10">Windows-10</option>
                <option value="Fedora">Fedora</option>
                <option value="Centos">Centos</option>
                <option value="RHEL">RHEL</option>
                <option value="Ubuntu">Ubuntu</option>
			  </select>
			  </div>
		</td>
      </tr>
      <tr>
        <td>Decive Allocated</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
        <td>Is Item Refundable</td>
        <td>
        	<div class="form-group">
    <label class="radio-inline">
      <input type="radio" name="item" value="1">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="item" value="0">No
    </label>
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
      <tr>
        <td>Allocated IP Address</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <br>
      <tr id="laptopaccessories" style="display:none;" >
  <td>Laptop with Accessiories</td>
  <td>
  <div class="custom-control custom-checkbox"> 
  <input type="checkbox" name="laptopaccessories" value="1"> Given with All Laptop Accessiories
  
  <br>
    <input type="checkbox" name="laptopaccessories" value="0"> Not Given with All Laptop Accessiories

</div>
  </td>
  </tr>
  <br>
  <tr id="laptopoptions" style="display:none;">
        <td>laptop accessories options</td>
        <td>
        	<div class="form-group">
    <label class="radio-inline">
      <input type="radio" name="laptopoptions" value="1" >laptop Bag
    </label>
    <label class="radio-inline">
      <input type="radio" name="laptopoptions" value="0" >laptop Adapter
    </label>
    <!-- <label class="radio-inline">
      <input type="radio" name="laptop" value="0"> External network Dongel
    </label> -->
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
        <td>Location</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="Ast_location" id="Ast_location" class="form-control">
				<!-- </label> -->
			</div>
		</td>
      </tr>
    </tbody>
</table>
<div class="button-centre">
		<input type="submit" name="Submit" value="Submit"  align="center" class="btn btn-success" onclick="return assetsvalidation()" required>
  <div style="prepend-2 span-13 append-4">
	<div class="col-sm-7" align="right">
  </div>
  </div>
</div>
</div>
<!-- <a href="search.php"></a> -->
</div>
</form>
<div>
<script>

$(function(){
	$('#Applicable').hide();
	$('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'System') {
      $('#Applicable').show();
     	} else{
      $('#Applicable').hide();
      $("input:radio").removeAttr("checked");
		}
	});
});

$(function(){
	$('#laptopaccessories').hide();
	$('#AssetCategory').change(function(){
    // alert ("laptop");
    if($('#AssetCategory').val() == 'laptop') {
      $('#laptopaccessories').show();
     	} else{
      $('#laptopaccessories').hide();
      $("input:checkbox").removeAttr("checked");
		}
	});
});


</script>
</div>
<script>

$(document).ready(function(){
    $("input[name='laptopaccessories']").on("change", function(){
        var isChecked = $(this).prop("checked"); 
        if(isChecked){
          // alert("checked");
          $('#laptopoptions').show();
            // $(".buttons").show(); 
        } else {
          $('#laptopoptions').hide();
            // $(".buttons").hide(); 

            $("input[name='laptopoptions'][value='']").prop("checked", "checked"); 
        }
    }); 
});

</script>




</body>

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




<?php include 'footer.php';?>