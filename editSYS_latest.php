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
<?php include 'serverlink.php'; ?>

<?php
include_once 'db_test.php';
?>

<form method="POST" action="edithwdata.php?id=<?php echo $_GET['id']; ?>"name="assetshwedit" id="assetshwedit" style="border-radius:15px; border:10px; padding:15px;">
<?php
print_r($_REQUEST);
$transid = isset($_GET['id']) ? $_GET['id'] : '';
$rs=mysqli_query($conn, "SELECT * FROM  tbl_asset_details WHERE asset_detail_id='$transid'");
while($row=mysqli_fetch_array($rs)){
  

?>
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">

    <tbody>
        <tr>
            <td>Category</td>
            <td>
                <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['asset_detail_id']; ?>">
                    <select class="form-control" name="AssetCategory" id="AssetCategory">
                        <option value="">select Category</option>
                        <option value="System" <?php if($row['Ast_category']== 'System'){ echo "selected";} ?>>Systems</option>
                        <option value="Servers" <?php if($row['Ast_category']== 'Servers'){ echo "selected";} ?>>Servers</option>
                        <option value="laptop" <?php if($row['Ast_category']== 'laptop'){ echo "selected";} ?>>laptops</option>
                    </select>               
                </div>
            </td>
        </tr>
        <tr id="Applicable" style="display:none;">
            <td>Applicable For</td>
            <td>
                <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" name="Applicable"  value="1" <?php if($row['Applicable']== '1'){ echo "checked";} ?>>User Pc
                </label>
                <label class="radio-inline">
                  <input type="radio" name="Applicable" value="0" <?php if($row['Applicable']== '0'){ echo "checked";} ?>>As Server
                </label>
                </div>
            </td>
        </tr>
        <tr id="emp_code" style="display:none;">
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
                                while($rw = mysqli_fetch_array($res)){
                                // while($row = mysqli_fetch_all($res)){
                                      if($rw['emp_code']==$transid){
                                        echo "<option value='". $rw['emp_code'] ."' selected>" .$rw['emp_name'] ."</option>";  
                                      }else{
                                // echo '<option>' .$row['']
                                echo "<option value='". $rw['emp_code'] ."'>" .$rw['emp_name'] ."</option>";  
                            }    }      
                            ?> 
                    </select>
			    </div>  
            </td>
        </tr>
        <tr id="dvc_alloted" style="display: none;">
            <td>Decive Allocated</td>
            <td>
			    <div class="form-group">
					<input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control" placeholder="Enter Particular Assigned server name" value="<?php echo $row['device_allocated']; ?>" > 
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Belongs To</td>
            <td>
			    <div class="form-group">
			        <select class="form-control" name="Assetbelongs" id="Assetbelongs">
                        <option value="">select Belongs To</option>
                        <option value="Eenadu" <?php if($row['Ast_belongs']== 'Eenadu'){ echo "selected";} ?>>Eenadu</option>
                        <option value="MC" <?php if($row['Ast_belongs']== 'MC'){ echo "selected";} ?>>MC</option>
                        <option value="UKML" <?php if($row['Ast_belongs']== 'UKML'){ echo "selected";} ?>>UKML</option>
                        <option value="EtvB" <?php if($row['Ast_belongs']== 'EtvB'){ echo "selected";} ?>>EtvB</option>
                        <option value="colorama" <?php if($row['Ast_belongs']== 'colorama'){ echo "selected";} ?>>colorama</option>
        			</select>
		    	</div>
		    </td>
        </tr>
        <tr id="Assetdevicecode">
            <td>Device code</td>
            <td>
		        <div class="form-group">
			  	    <input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control" placeholder="Enter assigned Devicecode" value="<?php echo $row['Ast_dvc_code']; ?>">
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Hardware Details</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_processor" id="hw_processor">
                    <option value="">select model</option>
                        <option value="Dell->7040" <?php if($row['hardware_details']== 'Dell->7040'){ echo "selected";} ?>>Dell->7040</option>
                        <option value="Dell->3040" <?php if($row['hardware_details']== 'Dell->3040'){ echo "selected";} ?>>Dell->3040</option>
                        <option value="Dell->7070" <?php if($row['hardware_details']== 'Dell->7070'){ echo "selected";} ?>>Dell->7070</option>
                        <option value="Dell->3020" <?php if($row['hardware_details']== 'Dell->3020'){ echo "selected";} ?>>Dell->3020</option>
                        <!--HCL MOdel-->
                        <option value="Core 2 Duo" <?php if($row['hardware_details']== 'Core 2 Duo'){ echo "selected";} ?>>Core 2 Duo</option> 
                        <!-- server hp -->
                        <option value="ProLiant DL380 Gen9" <?php if($row['hardware_details']== 'ProLiant DL380 Gen9'){ echo "selected";} ?>>ProLiant DL380 Gen9</option>
                        <option value="ProLiant DL380 Gen6" <?php if($row['hardware_details']== 'ProLiant DL380 Gen6'){ echo "selected";} ?>>ProLiant DL380 Gen6</option>
                        <option value="ProLiant DL380p Gen8" <?php if($row['hardware_details']== 'ProLiant DL380p Gen8'){ echo "selected";} ?>>ProLiant DL380p Gen8</option>
                        <option value="ProLiant DL380 Gen7" <?php if($row['hardware_details']== 'ProLiant DL380 Gen7'){ echo "selected";} ?>>ProLiant DL380 Gen7</option>
                        <option value="ProLiant DL380 Gen8" <?php if($row['hardware_details']== 'ProLiant DL380 Gen8'){ echo "selected";} ?> >ProLiant DL380 Gen8</option>
                        <option value="ProLiant ML150 G5" <?php if($row['hardware_details']== 'ProLiant ML150 G5'){ echo "selected";} ?> > ProLiant ML150 G5</option>
                        <option value="ProLiant ML150 G6" <?php if($row['hardware_details']== 'ProLiant ML150 G6'){ echo "selected";} ?>>ProLiant ML150 G6</option>
                        <option value="HP Pro 3330 MT" <?php if($row['hardware_details']== 'HP Pro 3330 MT'){ echo "selected";} ?> >HP Pro 3330 MT</option>
                        <!-- <option value="ProLiant ML350 G6" <?php if($row['hardware_details']== 'Eenadu'){ echo "selected";} ?>>ProLiant ML350 G6</option> -->
                        <option value="ProLiant DL360 Gen10"  <?php if($row['hardware_details']== 'ProLiant DL360 Gen10'){ echo "selected";} ?>>ProLiant DL360 Gen10</option>
                        <option value="ProLiant ML350 G6" <?php if($row['hardware_details']== 'ProLiant ML350 G6'){ echo "selected";} ?>>ProLiant ML350 G6</option>
                        <option value="ProLiant DL320e Gen8 v2" <?php if($row['hardware_details']== 'ProLiant DL320e Gen8 v2'){ echo "selected";} ?>  >ProLiant DL320e Gen8 v2</option>
                        <option value="OptiPlex 7060" <?php if($row['hardware_details']== 'OptiPlex 7060'){ echo "selected";} ?>>OptiPlex 7060</option>
                        <option value="ProLiant DL180 G6" <?php if($row['hardware_details']== 'ProLiant DL180 G6'){ echo "selected";} ?>>ProLiant DL180 G6</option>
                        <option value="ProLiant ML10 v2" <?php if($row['hardware_details']== 'ProLiant ML10 v2'){ echo "selected";} ?>>ProLiant ML10 v2</option>
                        <option value="VMware Virtual Platform" <?php if($row['hardware_details']== 'VMware Virtual Platform'){ echo "selected";} ?>>VMware Virtual Platform</option>
                        <option value="PowerEdge R440" <?php if($row['hardware_details']== 'PowerEdge R440'){ echo "selected";} ?>>PowerEdge R440</option>
                        <option value="PowerEdge R540" <?php if($row['hardware_details']== 'PowerEdge R540'){ echo "selected";} ?>>PowerEdge R540</option>
                        <option value="ThinkCentre M710t 10MAA08TIG" <?php if($row['hardware_details']== 'ThinkCentre M710t 10MAA08TIG'){ echo "selected";} ?>>ThinkCentre M710t 10MAA08TIG</option>
                        <option value="ProLiant DL20 Gen9" <?php if($row['hardware_details']== 'ProLiant DL20 Gen9'){ echo "selected";} ?>>ProLiant DL20 Gen9</option>                                                  
                        <option value="ProDesk 6200 G4 MT" <?php if($row['hardware_details']== 'ProDesk 6200 G4 MT'){ echo "selected";} ?>>ProDesk 6200 G4 MT</option>
                      
                    </select>
                </div>
		        </td>
        </tr>
        <tr>
            <td>Device Serialno</td>
            <td>
			    <div class="form-group">
					<input type="text" name="deviceserialno" id="deviceserialno" class="form-control" placeholder="Enter Serialnumber" value="<?php echo $row['device_serial_no']; ?>">
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Operating System</td>
            <td>
		    	<div class="form-group">
			        <select class="form-control" name="OS" id="OS">
                        <option value="">select Operating System </option>
                        <option value="Windows-7"<?php if($row['OS']== 'Windows-7'){ echo "selected";} ?>>Windows-7</option>
                        <option value="Windows-10" <?php if($row['OS']== 'Windows-10'){ echo "selected";} ?>>Windows-10</option>
                        <option value="Fedora" <?php if($row['OS']== 'Fedora'){ echo "selected";} ?>>Fedora</option>
                        <option value="Centos" <?php if($row['OS']== 'Centos'){ echo "selected";} ?>>Centos</option>
                        <option value="RHEL" <?php if($row['OS']== 'RHEL'){ echo "selected";} ?>>RHEL</option>
                        <option value="Ubuntu" <?php if($row['OS']== 'Ubuntu'){ echo "selected";} ?>>Ubuntu</option>
			        </select>
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Refundable</td>
            <td>
        	    <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="item" value="yes" <?php if($row['is_item_refundable']== 'yes'){ echo "checked";} ?>>Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="item" value="no" <?php if($row['is_item_refundable']== 'no'){ echo "checked";} ?>>No
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Allocated IP Address</td>
            <td>
			    <div class="form-group">
    				<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" placeholder="Enter Assigned IPAddress" value="<?php echo $row['Allocated_ipaddress']; ?>">
            	</div>
		    </td>
        </tr>
        <tr>
            <td>Device Recivied On</td>
            <td>
			    <div class="form-group">
					<input type="text" name="dvc_recv" id="DeviceReciviedOn" class="form-control" placeholder="Enter Received Date" value="<?php echo $row['dvc_recv']; ?>">
			    </div>
		    </td>
        </tr>
	    <tr>
	    	<td>Put To User On</td>
            <td>
			    <div class="form-group">
					<input type="text" name="put_to_user" id="puttoUser" class="form-control" placeholder="Enter Date of Issued" value="<?php echo $row['dvc_put_to_user']; ?>">
			    </div>
		    </td>
        </tr>
        <tr>
          <td>Location</td>
          <td>
			      <div class="form-group">
					    <input type="text" name="Ast_location" id="Ast_location" class="form-control" placeholder="Enter particular location" value="<?php echo $row['Ast_location']; ?>">
			      </div>
		      </td>
        </tr>
        <tr>
                <td>Current status</td>
                <td>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">Select status</option>
                            <option value="Requested" <?php if($row['ast_current_status']== 'Requested'){ echo "selected";} ?>  >Requested</option>
                            <option value="Deployed" <?php if($row['ast_current_status']== 'Deployed'){ echo "selected";} ?> >Deployed</option>
                            <option value="Archived" <?php if($row['ast_current_status']== 'Archived'){ echo "selected";} ?> >Archived</option>                   
                            <option value="Broken" <?php if($row['ast_current_status']== 'Broken'){ echo "selected";} ?>>Broken</option>
                            <option value="In Repair" <?php if($row['ast_current_status']== 'In Repair'){ echo "selected";} ?>>In Repair</option>
                        </select>
                    </div>
                </td>
                </tr>
    </tbody>
</table>
</div>
<?php
}
?>
<div class="button-centre">
		<input type="submit" name="Submit" value="Update"  align="center" class="btn btn-success" >
        <!-- <button type="submit" class="btn btn-success" name="Update">Update</button> -->

</div>
</div>
</form>

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


<!-- script for applicable radio button using select -->
<script>

  $(document).ready(function(){
    astc();
    function astc(){
      alert('123');
      if($('#AssetCategory').val() == 'System') {
        alert('456');
      $('#Applicable').show();
     	} else{
      $('#Applicable').hide();
      $("input:radio").removeAttr("checked");
		}
    }
	// $('#Applicable').hide();
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
   appli();
   function appli(){
    var app = $("input[name='Applicable']").val();
        alert("asdf");
        if(app == '1'){
          alert("checked");
          $('#emp_code').show();
          $("#dvc_alloted").hide();
        } else {
          $('#emp_code').hide();
          $("#dvc_alloted").show();
        }

   }

    $("input[name='Applicable']").on("click", function(){
      alert("adf");
        var app = $(this).val();
        alert("asdf");
        if(app == '1'){
          alert("checked");
          $('#emp_code').show();
          $("#dvc_alloted").hide();
        } else {
          $('#emp_code').hide();
          $("#dvc_alloted").show();
        }
    }); 
});
</script>

<!-- <script>

$(document).ready(function(){
  appli();
  function appli(){
    var app = $("input[name='Applicable']").val();
    alert('00000');
    if(app == 'User pc'){
      alert('999999');
      $('#emp_code').show();
    } else{
      $('#emp_code').hide();
      $('#dvc_alloted').show();
    }
  }
  $("input[name='Applicable']").on("click", function(){
    alert('1234565');
    var app =$(this).val();
    alert('123');
    if(app == 'User pc'){
      alert('coming');
      $('#emp_code').show();
    } else {
      $('#emp_code').hide();
      $('#dvc_alloted').show();
    }
  });
});

</script> -->







<!-- ///////////  device allocated input name for servers  ///////////////// -->
<!-- <script>

  $(document).ready(function(){
    serv();
    function serv(){
      alert('111111');
      if($('#AssetCategory').val() == 'Servers') {
        alert('66666666');
      $('#dvc_alloted').show();
     	} else{
      $('#dvc_alloted').hide();
      $("input:radio").removeAttr("checked");
		}
    }

	$('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'Servers') {
      alert("aaaaaa");
      $('#dvc_alloted').show();
     	} else{
      $('#dvc_alloted').hide();
      $("input:text").removeAttr("checked");
		}
	});
});

</script> -->

<!-- //////////// eenadu device code /////// -->

<script>

  $(document).ready(function(){
    dvccode();
    function dvccode(){
      alert('122333422');
      if($('#Assetbelongs').val() == 'Eenadu') {
        alert('66666666');
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:radio").removeAttr("checked");
		}
    }
    // $('#dvc_alloted').hide();
	$('#Assetbelongs').change(function(){
    if($('#Assetbelongs').val() == 'Eenadu') {
      alert("abbababab");
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
		}
	});
});

</script>





<?php  include 'footerhw.php';?>

