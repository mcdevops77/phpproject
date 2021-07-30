<?php 
include 'session.php';
?>
<?php include 'serverlink.php'; ?>

<style>

.loading 
            {
                text-align: center;
                display: block;
            }
</style>
<style>

label {
    display: flex;
    max-width: 100%;
    margin-bottom: 14px;
    font-weight: 700;
}

.col-sm-6 {
    width: 15%;
}

.col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
    float: right;
}

</style>
<!-- <style>
<?php //include 'css/hardware-group.css'; ?>
</style> -->

<form method="post" name="assets" action="hwassetinsert.php" id="assets" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table"  id="existed_records">

    <tbody>
        <tr>
          <td>Category</td>
          <td>
			      <div class="form-group">
			        <select class="form-control" name="AssetCategory" id="AssetCategory">
                  <option value="">select Category</option>
                  <option value="System">Systems</option>
                  <option value="Servers">Servers</option>
                  <option value="laptop">laptops</option>
                  <!-- <option value="Monitors">Monitors</option> -->
                <!-- <optgroup label="Accessories"> -->
                  <!-- <option value="Keyboards">Keyboards</option> -->
                  <!-- <option value="Mouse">Mouse</option>
                  <option value="RAM">RAM</option> -->
                </optgroup>
			        </select>
			      </div>
		      </td>
        </tr>
	        <tr id="Applicable" style="display:none;">
	          <td> Applicable For</td>
	          <td>
	            <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" name="Applicable" id="apt"  value="Userpc">User Pc
                </label>
                <label class="radio-inline">
                  <input type="radio" name="Applicable" id="apt" value="Server">As Server
                </label>
		          </div>
	          </td>
	        </tr>
          <tr id="emplycode"  style="display: none" >
        <td>Decive Allocated</td>
        <td>
			<div class="form-group">
            <select name="emp_code" id="emp_code" class="form-control">
            <option value="">select Employee</option>
            <?php
            include_once 'db_test.php';
            $sql = "select * from tbl_employee_master";
            $res =  mysqli_query($conn, $sql);
            // $result = mysqli_query($conn, $sql) or die('error');
            while($row = mysqli_fetch_array($res)){
            // while($row = mysqli_fetch_all($res)){
                echo "<option value='". $row['emp_code'] ."'>" .$row['emp_name'] ."</option>";  

            }          
            ?> 
			</div>
		</td>
      </tr>
          <tr id="dvc_alloted" style="display: none;">
        <td>Decive Allocated</td>
        <td>
			<div class="form-group">
					<input type="text" name="devicealtd" id="devicealtd" class="form-control" placeholder="Enter Particular Assigned  name"> 
			</div>
		</td>
      </tr>
      <tr>
        <td>Belongs To</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="Assetbelongs" id="Assetbelongs">
				<option value="">select Belongs To</option>
                <option value="Eenadu">Eenadu</option>
               	<option value="MC">MC</option>
                <option value="UKML">UKML</option>
                <option value="EtvB">EtvB</option>
                <option value="colorama">colorama</option>
			  </select>
			  </div>
		</td>
      </tr>
      <tr id="astcode">
        <td>Device code</td>
        <td>
		<div class="form-group">

			  	<input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control" placeholder="Enter assigned Devicecode">
			  </div>
		</td>
      </tr>
    
	<tr>
        <td>Hardware Details</td>
        <td>
        <div class="hardware-group">
          <div class="form-group">
          <select class="form-control" name="hw_processor" id="hw_processor">
           <option value="">select Hardware Derails</option>
           <option value="Dell->7040">Dell->7040</option>
                        <option value="Dell->3040">Dell->3040</option>
                        <option value="Dell->7070">Dell->7070</option>
                        <option value="Dell->3020">Dell->3020</option>
                        <!--HCL MOdel-->
                        <option value="Core 2 Duo">Core 2 Duo</option> 
                        <!-- server hp -->
                        <option value="ProLiant DL380 Gen9">ProLiant DL380 Gen9</option>
                        <option value="ProLiant DL380 Gen6">ProLiant DL380 Gen6</option>
                        <option value="ProLiant DL380p Gen8">ProLiant DL380p Gen8</option>
                        <option value="ProLiant DL380 Gen7">ProLiant DL380 Gen7</option>
                        <option value="ProLiant DL380 Gen8">ProLiant DL380 Gen8</option>
                        <option value=" ProLiant ML150 G5"> ProLiant ML150 G5</option>
                        <option value="ProLiant ML150 G6">ProLiant ML150 G6</option>
                        <option value="HP Pro 3330 MT">HP Pro 3330 MT</option>
                        <option value="ProLiant ML350 G6">ProLiant ML350 G6</option>
                        <option value="ProLiant DL360 Gen10">ProLiant DL360 Gen10</option>
                        <option value="ProLiant ML350 G6">ProLiant ML350 G6</option>
                        <option value="ProLiant DL320e Gen8 v2">ProLiant DL320e Gen8 v2</option>
                        <option value="OptiPlex 7060">OptiPlex 7060</option>
                        <option value="ProLiant DL180 G6">ProLiant DL180 G6</option>
                        <option value="ProLiant ML10 v2">ProLiant ML10 v2</option>
                        <option value="VMware Virtual Platform">VMware Virtual Platform</option>
                        <option value="PowerEdge R440">PowerEdge R440</option>
                        <option value="PowerEdge R540">PowerEdge R540</option>
                        <option value="ThinkCentre M710t 10MAA08TIG">ThinkCentre M710t 10MAA08TIG</option>
                        <option value="ProLiant DL20 Gen9">ProLiant DL20 Gen9</option>                                                  
                        <option value="ProDesk 6200 G4 MT">ProDesk 6200 G4 MT</option>
                        <!-- laptop -->
                        <option value="dell latitude">dell latitude</option>

       </select>
        </div>
        </div>
		    </td>
      </tr>
      <tr>
        <td>Device Serialno</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="deviceserialno" id="deviceserialno" class="form-control" placeholder="Enter Serialnumber">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
        <td>Operating System</td>
        <td>
			<div class="form-group">
			  <select class="form-control" name="OS" id="OS">
				<option value="">select Operating System </option>
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
        <td>Refundable</td>
        <td>
        	<div class="form-group">
    <label class="radio-inline">
      <input type="radio" name="item" id="ref" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="item" id="ref" value="no">No
    </label>
</div>
</td>
</tr>

     
      <tr>
        <td>Allocated IP Address</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" placeholder="Enter Assigned IPAddress">
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
      <input type="checkbox" name="laptopoptions"   value="1" > laptop Bag
    <!-- </label> -->
    <!-- <label class="radio-inline"> -->
      <input type="checkbox" name="laptopoptions" value="0" > laptop Adapter
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
					<input type="text" name="dvc_recv" id="DeviceReciviedOn" class="form-control" placeholder="Enter Received Date">
				<!-- </label> -->
			</div>
		</td>
      </tr>
	  <tr>
	  	<td>Device Issued On</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="put_to_user" id="puttoUser" class="form-control" placeholder="Enter Date of Issued">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
        <td>Location</td>
        <td>
			<div class="form-group">
				<!-- <label> -->
					<input type="text" name="Ast_location" id="Ast_location" class="form-control" placeholder="Enter particular location">
				<!-- </label> -->
			</div>
		</td>
      </tr>
      <tr>
                <td>Current status</td>
                <td>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">Select status</option>
                            <option value="Requested">Requested</option>
                            <option value="Deployed">Deployed</option>
                            <option value="Archived">Archived</option>                   
                            <option value="Broken">Broken</option>
                            <option value="In Repair">In Repair</option>
                            <option value="instock">In stock</option>
                            <option value="Outstock">Outstock</option>
                            <option value="scrap">scrap</option>
                            <option value="Returned">Returned</option>
                            <option value="Pending">Pending</option>
                            <option value="Replaced">Replaced</option>
                        </select>
                    </div>
                </td>
                </tr>
    </tbody>
</table>
<div id="new_records_div"></div>
<div class="button-centre">
		<input type="submit" name="Submit" value="Submit" id="astsubmit" align="center" class="btn btn-success" >

    <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
    
    <button type="button" class="btn btn-info" id="display" name="display" onclick="show()">Info</button>
 
</div>
</div>
<div class="loading" id="loading">
<img src="giphy.gif" alt="">
</div>
</div>
</form>

<div id="hwdata"></div>

<!-- <div class="col-sm-6"><div id="swdata_filter" class="dataTables_filter"><label style="font-size: 14px;line-height: 28px;">Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="swdata">
</label></div></div> -->




<!-- laptopaccessories using select -->



<script>

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

<!-- <script>
  $(function(){
    $('#dvc_alloted').hide();
    $('#AssetCategory').change(function(){
      if($('#AssetCategory').val() == 'laptop'){
        $('#dvc_alloted').show();
      } else{
        $('#dvc_alloted').hide();
      }
    });
  });
</script> -->



<!-- jquery datepicker fron & to -->
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

<!-- hide&show using checkbox -->
<script>


$(document).ready(function(){
  $("input[name='laptopaccessories']").on("change", function(){
    var isChecked = $(this).prop("checked"); 
      $("input[name='laptopaccessories']").not(this).prop('checked', false);
        if(isChecked){
          // alert("checked");
          $('#laptopoptions_id').show();
            // $(".buttons").show(); 
        } else {
          $('#laptopoptions_id').hide();
        } 
  }); 
});
</script>
<!-- ajax script -->
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

</script>

<!-- script for applicable radio button using select -->
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

<!-- script for device code using select  -->
<script>

$(function(){
  $('#astcode').hide();
  $('#Assetbelongs').change(function(){
    if($(this).val() == 'Eenadu'){
      $('#astcode').show();
    } else{
      $('#astcode').hide();
      $("input:text").removeAttr("checked");
    }
  });
});

</script>

<!-- script to device allocated for server select-->
<!-- <script>

$(function(){
	$('#dvc_alloted').hide();
	$('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'Servers') {
      alert("asdf");
      $('#dvc_alloted').show();
     	} else{
      $('#dvc_alloted').hide();
      $("input:text").removeAttr("checked");
		}
	});
});
</script> -->



<!-- select & textbox for 1 filed -->
<script>
$(document).ready(function(){
  $("input[name='Applicable']").on("click", function(){

    var appli = $(this).val();
    alert(appli);
    if(appli == 'Userpc'){
      alert(appli);
      $('#emplycode').show();
      $('#dvc_alloted').hide();
    } else{
      $('#emplycode').hide();
      $('#dvc_alloted').show();
    }
  });

});

</script>



<!-- reset button -->
<script>
$(document).ready(function(){
  $("#resetform").click(function()
  {
    $("#assets")[0].reset();
  });
});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- gif script -->

<script type="text/javascript">
 var loading = $('#loading').hide();
               //Attach the event handler to any element
               $(document)
                       .ajaxStart(function () {
                           //ajax request went so show the loading image
                           loading.show();
                       })
                       .ajaxStop(function () {
                           //got response so hide the loading image
                           loading.hide();
                       }); 
</script>






<script>

  function show() {
    $.ajax({
        url:"datashowhw.php",
        type:"post",
        success:function(result){
          alert('page sok!!');
          console.log(result);
          $("#hwdata").html(result);
          $('#example').DataTable( {
        //   dom: 'Bfrtip',
        // //   buttons: [
        // //     'print', 'excel'
        // // ]
    } );
        }
    });
  }

</script>




<!-- <script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script> -->

<!-- <script>
$(document).ready(function(){
    var table = $('#example').DataTable();
    $('.dataTables_filter input').unbind().keyup(function(e) {
        var value = $(this).val();
        if (value.length>3) {
            alert(value);
            table.search(value).draw();
        }else{
            table.search('').draw();
        }

      });
});

</script> -->

<script>
$(document).ready(function(){
  $('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'laptop'){ 
      $('#dvc_alloted').show();
    }else if($('#AssetCategory').val() == 'Servers'){
      $('#dvc_alloted').show();
    } else{
      $('#dvc_alloted').hide();
    }

  });
});

</script>



<?php include 'links.php';   ?>


<?php  include 'footerhw.php';?>