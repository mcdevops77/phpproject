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
			<div class="form-group">
			  <select class="form-control" name="AssetCategory" id="AssetCategory">
				<option value=""></option>
                <option value="System">Systems</option>
                <option value="Servers">Servers</option>
                <!-- <option value="Mobile Devices">Mobile Devices</option> -->
                <!-- <option value="Others">Others</option> -->
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
			  	<input type="text" name="Assetdevicecode" id="devicecode" class="form-control">
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
<a href="search.php"></a>
</div>
</form>
<div>
<script>
// function hideoption(){
	// var appli = document.getElementById("AssetCategory");

	// if(appli.value == "System"){
	// 	document.getElementById("Applicable").style.visibility="visible";
	// }
	// else{
	// 	document.getElementById("Applicable").style.visibility="hidden";
	// }}
//  $(document).ready(function(){
// 	 $("AssetCategory").change(function(){
// 		 $(this).find("option:selected").each(function(){
// 			 var hideoption = $(this).attr("value");
// 			 if(hideoption){
// 				 $(".radio").not("." + optionvalue).hide();
// 				 $("." + optionvalue).show();
// 				} else{
// 					$(".radio").hide();
// 				}
// 		 });
// 	 }).change();
//  });
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


</script>
</div>
<div>
<!-- <script>
$(function () {
	 $("#devicecode").keypress(function (e) {
		  var keyCode = e.keyCode || e.which;
			 $("#lblError").html("");
		 var regex = /^[A-Za-z0-9]+$/;
		  var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only Alphabets and Numbers allowed.");
            }
 
            return isValid;
        });
    });

</script> -->



</div>

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

<script>
var pattern = /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;
x = 46;
$('input[type="text"]').keypress(function (e) {
    if (e.which != 8 && e.which != 0 && e.which != x && (e.which < 48 || e.which > 57)) {
        console.log(e.which);
        return false;
    }
}).keyup(function () {
    var this1 = $(this);
    if (!pattern.test(this1.val())) {
        $('#reg_ipaddress').text('Not Valid IP');
        while (this1.val().indexOf("..") !== -1) {
            this1.val(this1.val().replace('..', '.'));
        }
        x = 46;
    } else {
        x = 0;
        var lastChar = this1.val().substr(this1.val().length - 1);
        if (lastChar == '.') {
            this1.val(this1.val().slice(0, -1));
        }
        var ip = this1.val().split('.');
        if (ip.length == 4) {
            $('#reg_ipaddress').text('Valid IP');
        }
    }
});
</script>




<?php include 'footer.php';?>