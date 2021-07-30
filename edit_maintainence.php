<?php

include 'session.php';
?>
<!-- <style>
<?php //include 'css/toggle.css';   ?>
</style> -->

<?php

include 'dbconn.php';
?>




<form action="monitoring_insert.php" name="maintenance" id="maintenance" method="POST" style="border-radius:15px; border:10px; padding:15px;">

<?php
// print_r($_REQUEST);
$monitorid = isset($_GET['id']) ? $_GET['id'] : '';
print_r($monitorid);
$rs=mysqli_query($conn, "SELECT * FROM  tbl_asset_monitoring WHERE ast_mointoring_id='$monitorid'");
while($row=mysqli_fetch_array($rs)){
  // print_r($row);
  

?>


<div class="asset-tablepan">
    <div class="table-responsive">
        <table class="table border0-table">
            <tbody>
                <tr>
                    <td>Category</td>
                    <td>
                        <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['ast_mointoring_id']; ?>">
                            <select name="AssetCategory" id="AssetCategory" class="form-control">
                                <option value="">select Category </option>
                                <option value="System" <?php if($row['ast_monitoring_category']== 'System'){ echo "selected";} ?>>System</option>
                                <option value="Server" <?php if($row['ast_monitoring_category']== 'Server'){ echo "selected";} ?>>Servers</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr id="Particular" style="display: none;">
                    <td>Particular Server</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="Particular"  value="liveserver"  <?php if($row['ast_monitoring_particular_server']== 'liveserver'){ echo "checked";} ?>>Live Server
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Particular" value="backupserver"  <?php if($row['ast_monitoring_particular_server']== 'backupserver'){ echo "checked";} ?>>Backup Server
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Particular" value="Testing"  <?php if($row['ast_monitoring_particular_server']== 'Testing'){ echo "checked";} ?>>Testing Server
                            </label>
                        </div>
                    </td>
                </tr>
                <!-- </tr>
                <tr id="Significant" style="display: none;">
	                <td>Significante For</td>
	                <td>
	                    <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="Significant"  value="1">User System
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Significant" value="0">Server
                            </label>
		                </div>
	                </td>
	            </tr> -->
                <!-- <tr id="emp_code"  style="display: none" >
                     <td>Decive Allocated</td>
                    <td>
			            <div class="form-group">
                            <select name="emp_code" id="emp_code" class="form-control">
                                <option value="">select Employee</option>
                                    <?php
                                    // include_once 'db_test.php';
                                    // $sql = "select * from tbl_employee_master";
                                    // $res =  mysqli_query($conn, $sql);
                                    // while($row = mysqli_fetch_array($res)){
                                    //     echo "<option value='". $row['emp_code'] ."'>" .$row['emp_name'] ."</option>";  

                                    // }          
                                    ?>
                            </select>
                        </div>
                    </td>
                </tr> -->
                <tr id="dvc_alloted">
                    <td>Assigned Name</td>
                    <td>
			            <div class="form-group">
					        <input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control" placeholder="Enter Particular Assigned server name" value=" <?php echo $row['ast_monitoring_name']; ?> "> 
			            </div>
		            </td>
                </tr> 
                <!-- <tr>
                    <td>Hardware Details</td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="hardware_processor" id="hardware_processor">
                                <option value="">select Hardwareprocessor</option>
                                <option value="1">1</option>
                                <option value="Intel®core I5">Intel®core I5  </option>
                                <option value="Intel®core I5">Intel®core I5  </option>
                                <option value="Intel®Core I7">Intel®Core I7</option>
                                <option value="Intel®core I3">Intel®core i3</option> 
                                <option value="Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz">Intel(R) Xeon(R) CPU E5-2620 v3 @ 2.40GHz</option>
                                <option value="Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz">Intel(R) Xeon(R) Silver 4114 CPU @ 2.20GHz</option>
                            </select>
                        </div>
		            </td>
                </tr> -->
                <tr>
            
                <tr>
                    <td>Mointoring Type</td>
                    <td>
                        <div class="form-group">
                            <select name="maintype" id="maintype" class="form-control">
                                <option value="">select Mointoring Type </option>
                                <option value="Regular Mointoring" <?php if($row['ast_monitoring_type']== 'Regular Mointoring'){ echo "selected";} ?> >Regular Mointoring</option>
                                <option value="schedule Mointoring" <?php if($row['ast_monitoring_type']== 'schedule Mointoring'){ echo "selected";} ?> >schedule Mointoring</option>
                            <!-- <option value=""></option> -->
                            </select>
                        </div>
                    </td>
                </tr>
                    <td>Model</td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="hw_model" id="hw_model">
                                <option value="Dell->7040" <?php if($row['ast_monitoring_hw_model']== 'Dell->7040'){ echo "selected";} ?>>Dell->7040</option>
                                <option value="Dell->3040" <?php if($row['ast_monitoring_hw_model']== 'Dell->3040'){ echo "selected";} ?>>Dell->3040</option>
                                <option value="Dell->7070" <?php if($row['ast_monitoring_hw_model']== 'Dell->7070'){ echo "selected";} ?>>Dell->7070</option>
                                <option value="Dell->3020" <?php if($row['ast_monitoring_hw_model']== 'Dell->3020'){ echo "selected";} ?>>Dell->3020</option>
                                <!--HCL MOdel-->
                                <option value="Core 2 Duo" <?php if($row['ast_monitoring_hw_model']== 'Core 2 Duo'){ echo "selected";} ?>>Core 2 Duo</option> 
                                <!-- server hp -->
                                <option value="ProLiant DL380 Gen9" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL380 Gen9'){ echo "selected";} ?>>ProLiant DL380 Gen9</option>
                                <option value="ProLiant DL380 Gen6" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL380 Gen6'){ echo "selected";} ?>>ProLiant DL380 Gen6</option>
                                <option value="ProLiant DL380p Gen8" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL380p Gen8'){ echo "selected";} ?>>ProLiant DL380p Gen8</option>
                                <option value="ProLiant DL380 Gen7" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL380 Gen7'){ echo "selected";} ?>>ProLiant DL380 Gen7</option>
                                <option value="ProLiant DL380 Gen8" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL380 Gen8'){ echo "selected";} ?> >ProLiant DL380 Gen8</option>
                                <option value="ProLiant ML150 G5" <?php if($row['ast_monitoring_hw_model']== 'ProLiant ML150 G5'){ echo "selected";} ?> > ProLiant ML150 G5</option>
                                <option value="ProLiant ML150 G6" <?php if($row['ast_monitoring_hw_model']== 'ProLiant ML150 G6'){ echo "selected";} ?>>ProLiant ML150 G6</option>
                                <option value="HP Pro 3330 MT" <?php if($row['ast_monitoring_hw_model']== 'HP Pro 3330 MT'){ echo "selected";} ?> >HP Pro 3330 MT</option>
                                <!-- <option value="ProLiant ML350 G6" <?php if($row['ast_monitoring_hw_model']== 'Eenadu'){ echo "selected";} ?>>ProLiant ML350 G6</option> -->
                                <option value="ProLiant DL360 Gen10"  <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL360 Gen10'){ echo "selected";} ?>>ProLiant DL360 Gen10</option>
                                <option value="ProLiant ML350 G6" <?php if($row['ast_monitoring_hw_model']== 'ProLiant ML350 G6'){ echo "selected";} ?>>ProLiant ML350 G6</option>
                                <option value="ProLiant DL320e Gen8 v2" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL320e Gen8 v2'){ echo "selected";} ?>  >ProLiant DL320e Gen8 v2</option>
                                <option value="OptiPlex 7060" <?php if($row['ast_monitoring_hw_model']== 'OptiPlex 7060'){ echo "selected";} ?>>OptiPlex 7060</option>
                                <option value="ProLiant DL180 G6" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL180 G6'){ echo "selected";} ?>>ProLiant DL180 G6</option>
                                <option value="ProLiant ML10 v2" <?php if($row['ast_monitoring_hw_model']== 'ProLiant ML10 v2'){ echo "selected";} ?>>ProLiant ML10 v2</option>
                                <option value="VMware Virtual Platform" <?php if($row['ast_monitoring_hw_model']== 'VMware Virtual Platform'){ echo "selected";} ?>>VMware Virtual Platform</option>
                                <option value="PowerEdge R440" <?php if($row['ast_monitoring_hw_model']== 'PowerEdge R440'){ echo "selected";} ?>>PowerEdge R440</option>
                                <option value="PowerEdge R540" <?php if($row['ast_monitoring_hw_model']== 'PowerEdge R540'){ echo "selected";} ?>>PowerEdge R540</option>
                                <option value="ThinkCentre M710t 10MAA08TIG" <?php if($row['ast_monitoring_hw_model']== 'ThinkCentre M710t 10MAA08TIG'){ echo "selected";} ?>>ThinkCentre M710t 10MAA08TIG</option>
                                <option value="ProLiant DL20 Gen9" <?php if($row['ast_monitoring_hw_model']== 'ProLiant DL20 Gen9'){ echo "selected";} ?>>ProLiant DL20 Gen9</option>                                                  
                                <option value="ProDesk 6200 G4 MT" <?php if($row['ast_monitoring_hw_model']== 'ProDesk 6200 G4 MT'){ echo "selected";} ?>>ProDesk 6200 G4 MT</option>
                                <!-- laptop -->
                                <option value="dell latitude">dell latitude</option>

                                <option value="ps2" <?php if($row['ast_monitoring_hw_model']== 'ps2'){ echo "selected";} ?> >PS2-Mouse</option>
                                <option value="USB-Mouse" <?php if($row['ast_monitoring_hw_model']== 'USB-Mouse'){ echo "selected";} ?>      >USB-Mouse</option>
                                <option value="ps2-Keyboard" <?php if($row['ast_monitoring_hw_model']== 'ps2-Keyboard'){ echo "selected";} ?>  >PS2-Keyboard</option>
                                <option value="USB-Keyboard" <?php if($row['ast_monitoring_hw_model']== 'USB-Keyboard'){ echo "selected";} ?>  >USB-Keyboard</option>
                            </select>     
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Allocated IP Address</td>
                    <td>
			            <div class="form-group">
    					    <input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" placeholder="Enter IPAddress" value=" <?php echo $row['ast_monitoring_ipaddress']; ?>   ">
            	        </div>
		            </td>
                </tr>
                <tr>
                    <td>Hardware Issues</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="hw_issue" value="yes" <?php if($row['ast_monitoring_hw_issue']== 'yes'){ echo "checked";} ?>  >Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="hw_issue" value="no" <?php if($row['ast_monitoring_hw_issue']== 'no'){ echo "checked";} ?>>No
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Software Issues</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="sw_issue" value="1" <?php if($row['ast_monitoring_sw_issue']== '1'){ echo "checked";} ?> >Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sw_issue" value="0" <?php if($row['ast_monitoring_sw_issue']== '0'){ echo "checked";} ?>>No
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Purpose</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Enter Purpose of changing" value=" <?php echo $row['ast_monitoring_change_purpose']; ?> ">
                        </div>
                    </td>
                </tr>
                <tr id="backupstored">
                    <td>Backups Stored</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="backupstored" id="backupstored" class="form-control" placeholder="Enter Backups stored in Details" value=" <?php echo $row['ast_monitoring_backup_server_in']; ?> ">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Date of Changed</td>
                    <td>
                        <div class="form-group" >
                                        
                            <input type="text" name="changed_date" id="changed_date" class="form-control" placeholder="Enter Date of Changed" value=" <?php echo $row['ast_monitoring_changed_date']; ?> ">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="location" id="location" class="form-control" placeholder="Enter Current Location" value="<?php echo $row['ast_monitoring_location']; ?> ">
                        </div>
                    </td>
                </tr>
                <tr>
                <td>Current status</td>
                <td>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="">Select status</option>
                            <option value="Requested" <?php if($row['ast_monitoring_status']== 'Requested'){ echo "selected";} ?> >Requested</option>
                            <option value="Pending" <?php if($row['ast_monitoring_status']== 'Pending'){ echo "selected";} ?> >Pending</option>
                            <option value="Deployed" <?php if($row['ast_monitoring_status']== 'Deployed'){ echo "selected";} ?> >Deployed</option>
                            <option value="Replaced" <?php if($row['ast_monitoring_status']== 'Replaced'){ echo "selected";} ?> >Replaced</option>
                            <option value="Archived" <?php if($row['ast_monitoring_status']== 'Archived'){ echo "selected";} ?> >Archived</option>                   
                            <option value="Broken" <?php if($row['ast_monitoring_status']== 'Broken'){ echo "selected";} ?> >Broken</option>
                            <option value="In Repair" <?php if($row['ast_monitoring_status']== 'In Repair'){ echo "selected";} ?> >In Repair</option>
                            <option value="instock" <?php if($row['ast_monitoring_status']== 'instock'){ echo "selected";} ?> >In stock</option>
                            <option value="Outstock" <?php if($row['ast_monitoring_status']== 'Outstock'){ echo "selected";} ?>  >Outstock</option>
                            <option value="scrap" <?php if($row['ast_monitoring_status']== 'scrap'){ echo "selected";} ?> >scrap</option>
                            <option value="Returned" <?php if($row['ast_monitoring_status']== 'Returned'){ echo "selected";} ?> >Returned</option>
                           
                        </select>
                    </div>
                </td>
                </tr>
                <!-- <tr>
                    <td>Working Status</td>
                    <td>
                        <div class="form-group">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <label for="InActive">In Active</label>
                                    <label class="switch">
                                        <input type="checkbox" name="working_status">
                                            <span class="slider round"></span>
                                    </label>
                                    <label for="Active">Active</label>
                            </div>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <div class="button-centre">
            <input type="Submit" class="btn btn-success" id="Submit" name="Submit-monitoring" value="Save">
            <!-- <input type="search" name="assetmonitor" id="assetmonitor" class="btn btn-info"  value="Display Data" > -->
    </div>
</div>
<?php
}
?>
</form>








<?php include 'dtlinks.php';  ?>


<!-- <script>
  $(function(){
    $('#Particular').hide();
    $('#AssetCategory').change(function(){
      if($('#AssetCategory').val() == 'Server'){
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }
    });
  });
</script> -->

<script>

$(document).ready(function(){
    cate();
    function cate(){
        // alert(cate);
        if($('#Assetcategory').val() == 'Server'){
            alert('000');
            $('#particular').show();
        } else{
            $('#particular').hide();
        }
    }
    $('#AssetCategory').change(function(){
      if($('#AssetCategory').val() == 'Server'){
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }
    });
});

</script>




<script>
  $(document).ready(function(){
    $('#backupstored').hide();
    $("input[name='Particular']").on("click", function(){
    //   alert("adf");
        var par = $(this).val();
        // alert("asdf");
        if(par == 'liveserver'){
        //   alert("checked");
          $('#backupstored').show();
      } else{
        $('#backupstored').hide();
      }
    });
  });
</script>

<script>
 $('#changed_date').datepicker({
          dateFormat : 'dd-mm-yy',
          changeMonth: true,
          changeYear: true
  });
</script>


<?php include 'footer.php'; ?>