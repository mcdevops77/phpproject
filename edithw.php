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

<?php
include_once 'db_test.php';
?>

<form method="post" name="editassets" action="edithwdata.php" id="editassets" style="border-radius:15px; border:10px; padding:15px;">

<?php
print_r($_REQUEST);
$transid = isset($_GET['id']) ? $_GET['id'] : '';
$rs=mysqli_query($conn, "SELECT * FROM  tbl_asset_details WHERE asset_detail_id='$transid'");
//echo "SELECT * FROM  tbl_asset_details WHERE asset_detail_id='$transid'";

while($row=mysqli_fetch_array($rs)){
      echo '<pre>';
    var_dump($row);
    print_r($rs);

	
?>
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table"  >
    <tbody>
        <tr>
          <td>Category</td>
            <td>
			    <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['asset_detail_id']; ?>">
			        <select class="form-control" name="AssetCategory" id="AssetCategory">
                        <option value="0">select Category</option>
                        <option value="System"  <?php if($row['Ast_category']== 'System'){ echo "selected";} ?>>Systems</option>
                        <option value="Servers"  <?php if($row['Ast_category']== 'Servers'){ echo "selected";} ?>   >Servers</option>
                        <option value="laptop"  <?php if($row['Ast_category']== 'laptop'){ echo "selected";} ?>  >laptops</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr  id="Applicable" style="display:none;">
	        <td> Applicable For</td>
	        <td>
	            <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="Applicable"  value="1" <?php if($row['Applicable']== '1'){ echo "selected";} ?>>User Pc
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="Applicable" value="0" <?php if($row['Applicable']== '0'){ echo "selected";} ?> >As Server
                    </label>
		        </div>
	        </td>
	    </tr>
        <tr id="emp_code"  style="display: none"  >
            <td>Decive Allocated</td>
            <td>
			    <div class="form-group">
                    <select name="emp_code" id="emp_code" class="form-control">
                        <option value="0" <?php if($row['emp_name']== '0'){ echo "selected";} ?>>select Employee</option>
                        <?php
                        include_once 'db_test.php';
                        $sql = "select * from tbl_employee_master";
                        $res =  mysqli_query($conn, $sql);
                        // $result = mysqli_query($conn, $sql) or die('error');
                        while($row = mysqli_fetch_array($res)){
                        // while($row = mysqli_fetch_all($res)){
                         // echo '<option>' .$row['']
                            echo "<option value='". $row['emp_code'] ."'>" .$row['emp_name'] ."</option>";  
                        }          
                        ?> 
                    </select>
                </div>
            </td>
        </tr>
        <tr id="dvc_alloted" style="display: none;" >
            <td>Decive Allocated</td>
            <td>
			    <div class="form-group">
					<input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control"   placeholder="Enter Particular Assigned server name"> 
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Belongs To</td>
            <td>
			    <div class="form-group">
			        <select class="form-control" name="Assetbelongs" id="Assetbelongs">
                        <option value="">select Belongs To</option>
                        <option value="Eenadu"  <?php if($row['Ast_belongs']== 'Eenadu'){ echo "selected";} ?> >Eenadu</option>
                        <option value="MC"  <?php if($row['Ast_belongs']== 'MC'){ echo "selected";} ?> >MC</option>
                        <option value="UKML"  <?php if($row['Ast_belongs']== 'UKML'){ echo "selected";} ?>>UKML</option>
                        <option value="EtvB"  <?php if($row['Ast_belongs']== 'EtvB'){ echo "selected";} ?> >EtvB</option>
                        <option value="colorama"  <?php if($row['Ast_belongs']== 'colorama'){ echo "selected";} ?> >colorama</option>
			        </select>
			    </div>
	    	</td>
        </tr>
        <tr id="Assetdevicecode">
            <td>Device code</td>
            <td>
		        <div class="form-group">
		    	  	<input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control"  value="<?php echo $row['Ast_dvc_code']; ?>"  placeholder="Enter assigned Devicecode">
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Hardware Details</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_processor" id="hw_processor">
                        <option value="">select Hardwareprocessor</option>
                        <option value="Intel®core I5 @3.20GHZ"  <?php if($row['hardware_details']== 'Intel®core I5 @3.20GHZ'){ echo "selected";} ?>  >Intel®core I5  </option>
                        <option value="Intel®Core I7 @3.2GHZ"  <?php if($row['hardware_details']== 'Intel®Core I7 @3.2GHZ'){ echo "selected";} ?> >Intel®Core I7 </option>
                        <option value="Intel®core i3 @ 3.2GHZ"  <?php if($row['hardware_details']== 'Intel®core i3 @ 3.2GHZ'){ echo "selected";} ?> >Intel®core i3 </option> 
                        <option value="Intel(R)Xeon(R)CPU E5-2620v3@2.40GHz"  <?php if($row['hardware_details']== 'Intel(R)Xeon(R)CPU E5-2620v3@2.40GHz'){ echo "selected";} ?>>Intel(R) Xeon(R) CPU E5-2620 v3 @ 2.40GHz</option>
                        <option value=">Intel®core I5-8500CPU" <?php if($row['hardware_details']== 'Intel®core I5-8500CPU'){ echo "selected";} ?>>Intel®core I5-8500CPU</option>   
                    </select>
                </div>
		    </td>
        </tr>
        <tr>
            <td>Device Serialno</td>
            <td>
			    <div class="form-group">
				    <input type="text" name="deviceserialno" id="deviceserialno" class="form-control" value="<?php echo $row['device_serial_no']; ?>" placeholder="Enter Serialnumber">
		    	</div>
		    </td>
        </tr>
        <tr>
            <td>Operating System</td>
            <td>
			    <div class="form-group">
			        <select class="form-control" name="OS" id="OS">
                        <option value="">select Operating System </option>
                        <option value="Windows-7"  <?php if($row['OS']== 'Windows-7'){ echo "selected";} ?>>Windows-7</option>
                        <option value="Windows-10"  <?php if($row['OS']== 'Windows-10'){ echo "selected";} ?> >Windows-10</option>
                        <option value="Fedora"  <?php if($row['OS']== 'Fedora'){ echo "selected";} ?> >Fedora</option>
                        <option value="Centos"  <?php if($row['OS']== 'Centos'){ echo "selected";} ?> >Centos</option>
                        <option value="RHEL"  <?php if($row['OS']== 'RHEL'){ echo "selected";} ?> >RHEL</option>
                        <option value="Ubuntu"  <?php if($row['OS']== 'Ubuntu'){ echo "selected";} ?> >Ubuntu</option>
			        </select>
			    </div>
		    </td>
        </tr>
        <tr>
            <td>Is Item Refundable</td>
            <td>
        	    <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="item" value="1"  <?php if($row['is_item_refundable'] == '1'){echo "selected";} ?> >Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="item" value="0" <?php if($row['is_item_refundable'] == '0'){echo "selected";}?> >No
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Allocated IP Address</td>
            <td>
			    <div class="form-group">
			    	<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" value="<?php echo $row['Allocated_ipaddress']; ?>" placeholder="Enter Assigned IPAddress">
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
                    <input type="radio" name="laptopoptions"   value="1" > laptop Bag
                    <input type="radio" name="laptopoptions" value="0" > laptop Adapter
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
					<input type="text" name="dvc_recv" id="DeviceReciviedOn" class="form-control" value="<?php echo $row['dvc_recv']; ?>" placeholder="Enter Received Date">
				<!-- </label> -->
			    </div>
		    </td>
        </tr>
	    <tr>
	  	    <td>Put To User On</td>
            <td>
			    <div class="form-group">
				<!-- <label> -->
					<input type="text" name="put_to_user" id="puttoUser" class="form-control" placeholder="Enter Date of Issued" value="<?php echo $row['dvc_put_to_user']; ?>"  >
				<!-- </label> -->
		    	</div>
		    </td>
        </tr>
        <tr>
            <td>Location</td>
            <td>
			    <div class="form-group">
				<!-- <label> -->
					<input type="text" name="Ast_location" id="Ast_location" class="form-control" placeholder="Enter particular location"  value="<?php echo $row['Ast_location']; ?>">
				<!-- </label> -->
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
	<input type="submit" name="Submit" value="Update" class="btn btn-success" >

</div>
</div>
</form>







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



<script>

$(function(){
	$('#Applicable').hide();
	$('#AssetCategory').change(function(){
    if($('#AssetCategory').val() == 'System') {
        alert("asd");
      $('#Applicable').show();
     	} else{
      $('#Applicable').hide();
      $("input:radio").removeAttr("checked");
		}
	});
}); 

</script>


<script>

$(function(){
  $('#Assetdevicecode').hide();
  $('#Assetbelongs').change(function(){
    if($(this).val() == 'Eenadu'){
      $('#Assetdevicecode').show();
    } else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
    }
  });
});

</script>



<script>

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
</script>


<script>
 $(document).ready(function(){
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