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

<form method="post" name="assets" action="insert.php" id="assets" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table"  id="existed_records">

    <tbody>
      <tr>
        <td>Category</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="AssetCategory" id="AssetCategory">
        <option value="">select AssetCategory</option>
                <option value="System">Systems</option>
                <option value="Servers">Servers</option>
                <option value="laptop">laptops</option>
                <option value="Monitors">Monitors</option>
                <optgroup label="Accessories">
                <option value="Keyboards">Keyboards</option>
                <!-- <option value="Mouse">Mouse</option>
                <option value="RAM">RAM</option> -->
              </optgroup>
                <!-- <option value="Others">Others</option> -->
			  </select>
			  </div>
		</td>
      </tr>
	  <tr id="Applicable" style="display:none;">
	  <td> Applicable For</td>
	  <td>
	  <div class="form-group">
	  <label class="radio-inline">
      <input type="radio" name="Applicable" id="appliuser" value="1">User Pc
    </label>
    <label class="radio-inline">
      <input type="radio" name="Applicable" id="appliserver" value="0">As Server
    </label>
		</div>
	  </td>
	  </tr>
    <tr id="emp_code"  style="display: none" >
        <td>Decive Allocated</td>
        <td>
			<div class="form-group">
            <select name="emp_code" id="emp_code" class="form-control">
            <option value="">select Employee</option>
            <?php
            include_once 'db_test.php';
            $sql = "select * from tbl_employee_masters";
            $res =  mysqli_query($conn, $sql);
            // $result = mysqli_query($conn, $sql) or die('error');
            while($row = mysqli_fetch_array($res)){
            // while($row = mysqli_fetch_all($res)){

                // echo '<option>' .$row['']
                echo "<option value='". $row['emp_code'] ."'>" .$row['emp_name'] ."</option>";  

            }          
            ?> 
			</div>
		</td>
      </tr>
      <tr id="deviceallocated" style="display: none;" >
      <td>Device Allocated</td>
      <td>
      <div class="form-group">
      <input type="text" name="deviceallocated" id="deviceallocated" class="form-control" placeholder="Enter Allocated Device Name" > 
      </div>
      
      
      
      </td>
      </tr>
      <tr>
        <td>Belongs To</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="Assetbelongs" id="Assetbelongs">
        <option value="">select Asset BelongTo</option>
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
			  	<input type="text" name="Assetdevicecode" id="devicecode" class="form-control"  placeholder="Enter Assigned Device code">
			  <!-- </label> -->
			  </div>
		</td>
      </tr>
    <!-- <tr>
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
                 <!-- <option value="Core2Duo">Core 2 Duo</option>  -->
				 <!-- server hp -->
				 <!-- <option value="Prolaint ML G5">Prolaint ML G5</option>
				 <option value="Prolaint ML G6">Prolaint ML G6</option>
         <option value="ProDesk 6200 G4 MT">ProDesk 6200 G4 MT</option>
                 <!-- laptop -->
                 <!-- <option value="dell latitude">dell latitude</option> -->
         <!-- Ram models -->
         <!-- <option value="DDR2-2GB">DDR2-2GB</option>
         <option value="DDR3-2GB">DDR3-2GB</option>
         <option value="DDR2-2GB">DDR2-4GB</option>
         <option value="DDR4-4GB">DDR4-4GB</option>
         <option value="DDR2-1GB">DDR2-1GB</option>

			  </select>
			</div>
		</td>
	</tr> -->
	<tr> 
        <td>Hardware Details</td>
        <td>
			<div class="form-group">
			<!-- <input type="text" name="hw_details" class="form-control" style="float:left;width:32%; margin-right:2%"> -->
      <select class="form-control" name="hw_processor" id="hw_processor">
           <option value="">select Hardwareprocessor</option>
           <option value="Intel®core I5 @3.20GHZ">Intel®core I5 @3.20GHZ </option>
          <option value="Intel®Core I7 @3.2GHZ">Intel®Core I7 @3.2GHZ</option>
           <option value="Intel®core i3 @ 3.2GHZ">Intel®core i3 @ 3.2GHZ</option>    
       </select>     
			</div>
		</td>
      </tr>
      <!-- <tr>
        <td>Device Serialno</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<!-- <input type="text" name="deviceserialno" id="deviceserialno" class="form-control"> -->
				<!-- </label> -->
			<!-- </div> -->
		<!-- </td> -->
      <!-- </tr>  -->
      <tr>
        <td>Operating System</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="OS" id="OS">
				<option value="">Select Operationg System</option>
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
      <!-- <tr>
        <td>Decive Allocated</td>
        <td>
			<div class="form-group"> -->
				<!-- <label> -->
					<!-- <input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control"> -->
				<!-- </label> -->
			<!-- </div>
		</td>
      </tr> -->
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

       <!-- <tr>
        <td>Registerd As</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<!-- <input type="text" name="reg_user" id="reg_user" class="form-control"> -->
				<!-- </label> -->
			<!-- </div>
		</td>
      </tr>  -->
      <tr>
        <td>Allocated IP Address</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" placeholder="Enter Assigned IP Address">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr id="laptopaccessories" style="display:none;">
  <td>Laptop with Accessiories</td>
  <td>
  <div class="form-group"> 
  <input type="checkbox" name="laptopaccessories" value="1" > Given with All Laptop Accessiories
  
  <br>
    <input type="checkbox" name="laptopaccessories" value="0"> Not Given with All Laptop Accessiories

</div>
  </td>
  </tr>
  <tr id="laptopoptions_id"  style="display:none;">
        <td>laptop accessiories</td>
        <td>
        	<div class="form-group">
    <!-- <label class="radio-inline"> -->
      <input type="radio" name="laptopoptions"   value="1" > laptop Bag
    <!-- </label> -->
    <!-- <label class="radio-inline"> -->
      <input type="radio" name="laptopoptions" value="0" > laptop Adapter
    <!-- </label> -->
   </div>
</td>
</tr>
<br>

	 <br>
    <tr>
      <td>Device Recivied On</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="dvc_recv" id="DeviceReciviedOn" class="form-control" placeholder="please select recived date">
				<!-- </label> -->
			</div>
		</td>
      </tr>
	  <tr>
	  	<td>Put To User On</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="put_to_user" id="puttoUser" class="form-control" placeholder="please select given date">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
        <td>Location</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="Ast_location" id="Ast_location" class="form-control" placeholder="please Enter paricular location">
				<!-- </label> -->
			</div>
		</td>
      </tr>
    </tbody>
</table>
<div id="new_records_div"></div>
<div class="button-centre">
		<input type="submit" name="Submit" value="Submit"  align="center" class="btn btn-success" onclick="return assetsvalidation()" required>
  <div style="prepend-2 span-13 append-4">
	<div class="col-sm-7" align="right">
  </div>
  </div>
</div>
</div>

</div>
</form>
<div>
<script>

// $(function(){
// 	$('#Applicable').hide();
// 	$('#AssetCategory').change(function(){
//     if($('#AssetCategory').val() == 'System') {
//       $('#Applicable').show();
//      	} else{
//       $('#Applicable').hide();
//       $("input:radio").removeAttr("checked");
// 		}
// 	});
// }); 

$(function(){
	$('#laptopaccessories').hide();
	$('#AssetCategory').change(function(){
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


$(document).ready(function(){

  // $("input[name='laptopaccessories']").on("change", function(){

  //       // var isChecked = $(this).prop("checked"); 
  //       var isChecked = false;
  //       $("input[name='laptopaccessories']").each(function(){
  //         if($(this).prop("checked")){
  //           isChecked = true;
  //         }
  //       });

  //       if(isChecked == true){
  //         // alert("checked");
  //         $('#laptopoptions_id').show();
  //           // $(".buttons").show(); 
  //       } else {
  //         $('#laptopoptions_id').hide();
  //           // $(".buttons").hide(); 

    //         // $("input[name='laptopoptions'][value='']").prop("checked", "checked"); 
    //     }
    // });

    $("input[name='laptopaccessories']").on("change", function(){
        var isChecked = $(this).prop("checked"); 
        $("input[name='laptopaccessories']").not(this).prop('checked', false);
        if(isChecked){
          // alert("checked");
          $('#laptopoptions_id').show();
            // $(".buttons").show(); 
        } else {
          $('#laptopoptions_id').hide();
            // $(".buttons").hide(); 

            // $("input[name='laptopoptions'][value='']").prop("checked", "checked"); 
        }
    }); 
});
</script>
<script>
 $('#AssetCategory').change(function(){
  var cat = $(this).val();
      if(cat == 'Monitors') {
        main_url = "monitors1.php";
      }else if(cat == 'Keyboards'){
        main_url ="accessories.php"
      }
      $.ajax({
            url: main_url,
            type:"POST",
            success:function(AssetCategory){
              // alert('AJAX call was successful!');
              console.log(AssetCategory);
              $("#new_records_div").html(AssetCategory);
              $("#new_records_div").show();
              $("#existed_records").hide();
            }
        });
 });
// $(document).ready(function(){

// });
// S(document).ready(function(){
//     $('#AssetCategory').change(function(){
//       var cat = $(this).val();
//       if($('#AssetCategory').val() == 'Monitors') {
//         $.ajax({
//         url:"Monitors.php",
//         type:"POST",
//         success:function(AssetCategory){
//           alert('AJAX call was successful!');
//           console.log(AssetCategory);


//     });

// });


// $.ajax({
//   url:"a.php",
//   type:"POST",
//   // data:{"key1":"val1","key2":"val2"},//--->json format
//   success:function(returned_data){
//     console.log(returned_data);
//     // $("#empty_div_id").html(returned_data)
//   }
// });
</script>

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

</script>



<script>
$(document).ready(function(){
    $("input[name='Applicable']").on("click", function(){
        var isChecked = $(this).prop("checked"); 
        $("input[name='Applicable']").not(this).prop('checked', false);
        if(isChecked){
          alert("checked");
          $('#emp_code').show();
          // $("#deviceallocated").show();
            // $(".buttons").show(); 
        } else {
          $('#emp_code').hide();
          // $("#deviceallocated").hide();
            // $(".buttons").hide(); 

            // $("input[name='laptopoptions'][value='']").prop("checked", "checked"); 
        }
    }); 
});
</script>


<script>

$(function(){
	$('#deviceallocated').hide();
	$('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'Servers') {
      alert("asdf");
      $('#deviceallocated').show();
     	} else{
      $('#deviceallocated').hide();
      $("input:text").removeAttr("checked");
		}
	});
});


</script>



<?php include 'footer.php';?>