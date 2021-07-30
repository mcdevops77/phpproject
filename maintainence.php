<?php include 'session.php';?>

<?php include 'serverlink.php'; ?>
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

<form action="monitoring_insert.php" name="maintenance" id="maintenance" method="POST" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
    <div class="table-responsive">
        <table class="table border0-table">
            <tbody>
                <tr>
                    <td>Category</td>
                    <td>
                        <div class="form-group">
                            <select name="AssetCategory" id="AssetCategory" class="form-control">
                                <option value="">select Category </option>
                                <option value="System">System</option>
                                <option value="Servers">Server</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Pendrive">Pendrive</option>
                                <option value="Keyboard">Keyboard</option>
                                <option value="NIC">NIC</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Mobiles">Mobiles</option>
                                <option value="Mobile Tab">TAB</option>
                                <option value="External HDD">Externadl HDD</option>
                                <option value="Internal HDD">Internal HDD</option>
                                <option value="Laptop">Laptop</option>
                                <option value="PowerCables">PowerCables</option>
                                <option value="HDMIcables">HDMIcables</option>
                                <option value="VGACables">VGACables</option>
                                <option value="Adapters">Adapters</option>
                                <option value="RAM">RAM</option>
                                <option value="Switches">Switches</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr id="Particular">
                    <td>Particular Server</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="Particular" id="particulartype"  value="liveserver">Live Server
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Particular"  id="particulartype"  value="backupserver">Backup Server
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Particular"   id="particulartype"  value="Testing">Testing Server
                            </label>
                        </div>
                    </td>
                </tr>
                <tr id="devicealloted">
                    <td>Assigned Name</td>
                    <td>
			            <div class="form-group">
					        <input type="text" name="dvc_alloted" id="dvc_alloted" class="form-control" placeholder="Enter Particular Assigned name"> 
			            </div>
		            </td>
                </tr>             
                <tr>
                    <td>Mointoring Type</td>
                    <td>
                        <div class="form-group">
                            <select name="maintype" id="maintype" class="form-control">
                                <option value="">select Mointoring Type </option>
                                <option value="Regular Mointoring">Regular Mointoring</option>
                                <option value="schedule Mointoring">schedule Mointoring</option>
                            <!-- <option value=""></option> -->
                            </select>
                        </div>
                    </td>
                </tr>
                    <td>Model</td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" name="hw_model" id="hw_model">
                                <option value="">select model</option>
                                <option value="Dell->7040">Dell->7040</option>
                                <option value="Dell->3040">Dell->3040</option>
                                <option value="Dell->7070">Dell->7070</option>
                                <option value="Dell->3020">Dell->3020</option>
                                <!--HCL MOdel-->
                                <option value="Core 2 Duo">Core 2 Duo</option> 
                                <option value="DualCore">DualCore</option>
                                <option value="CorePentium">Pentium</option>
                                <!-- server hp DELL -->
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
                                <!-- <option value="ProLiant ML350 G6">ProLiant ML350 G6</option> -->
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
                                <!-- PERIPHERALS -->
                                <option value="ps2">PS2-Mouse</option>
                                <option value="USB-Mouse">USB-Mouse</option>
                                <option value="ps2-Keyboard">PS2-Keyboard</option>
                                <option value="USB-Keyboard">USB-Keyboard</option>
                                <option value="Ultra Dual">Ultra Dual OTG</option> 
                            </select>     
                        </div>
                    </td>
                </tr>
                <tr id="regip">
                    <td>Allocated IP Address</td>
                    <td>
			            <div class="form-group">
    					    <input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" placeholder="Enter IPAddress">
            	        </div>
		            </td>
                </tr>
                <tr>
                    <td>Serial Number</td>
                    <td>
			            <div class="form-group">
    					    <input type="text" name="serialnum" id="serialnum" class="form-control" placeholder="Enter Serialnumber">
            	        </div>
		            </td>
                </tr>
                <tr>
                    <td>Hardware Issues</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="hw_issue" id="hwissue" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="hw_issue" id="hwissue"  value="no">No
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Software Issues</td>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="sw_issue" id="swissue"  value="yes">Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sw_issue" id="swissue"  value="no">No
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Purpose</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Enter Purpose of changing">
                        </div>
                    </td>
                </tr>
                <tr id="bkpstored">
                    <td>Backups Stored</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="backupstored" id="backupstored" class="form-control" placeholder="Enter Backups stored in Details">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Date of Changed</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="changed_date" id="changed_date" class="form-control" placeholder="Enter Date of Changed">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="location" id="location" class="form-control" placeholder="Enter Current Location">
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
                            <option value="Pending">Pending</option>
                            <option value="Deployed">Deployed</option>
                            <option value="Replaced">Replaced</option>
                            <option value="Archived">Archived</option>                   
                            <option value="Broken">Broken</option>
                            <option value="In Repair">In Repair</option>
                            <option value="instock">In stock</option>
                            <option value="Outstock">Outstock</option>
                            <option value="scrap">scrap</option>
                            <option value="Returned">Returned</option>
                        </select>
                    </div>
                </td>
                </tr>
                <tr>
                    <td>Any Remarks</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="remarks" id="remarks" class="form-control" placeholder="Enter any remarks">
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div class="button-centre">
            <input type="Submit" class="btn btn-success" id="Submit" name="Submit-monitoring" value="Monitoring">
            <input type="button" value="DataDisplay" class="btn btn-info" id="displaydata" name="Data_Display" >
        </div>
    </div>
</div>
</form>


<div id="monitordata"></div>

<div class="col-sm-6"><div id="data_filter" class="dataTables_filter"><label style="font-size: 14px;line-height: 28px;">Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="swdata">
</label></div></div>



<script>
$(document).ready(function(){
    $('#data_filter').hide();
    $('#displaydata').click(function(){
        // alert('0');
        if($('#displaydata').val() == 'DataDisplay'){
            $('#data_filter').show(); 
        } else{
            $('#data_filter').hide(); 
        }
    });
});




</script>

<script>
  $(function(){
    $('#Particular').hide();
    $('#AssetCategory').change(function(){
        // alert('1');
      if($('#AssetCategory').val() == 'Servers'){
        //   alert('2');
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }
    });
  });
</script>



<script>
  $(document).ready(function(){
    $('#bkpstored').hide();
    $("input[name='Particular']").on("click", function(){
        var par = $(this).val();
        if(par == 'liveserver'){
          $('#bkpstored').show();
      } else{
        $('#bkpstored').hide();
      }
    });
  });
</script>





<script type="text/javascript">
    $('#displaydata').click(function(){
 
      $.ajax({
            url: 'monitoringdata.php',
            type:"POST",
            success:function(data){
              alert('AJAX call was successful!');
              console.log(data);
              $("#monitordata").html(data);
              $(document).ready(function() {
                $('#example').DataTable( {
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'excel'
                    // ],
                    // responsive: true
                });
                });
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


<script>

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

</script>



<script>
$(document).ready(function(){
    $('#AssetCategory').change(function(){
        var type = $(this).val();
        
        if(type == 'Pendrive'){
            // alert(type);
            $('#regip').hide();

        } else if(type == 'Mobile Tab'){
            // alert(type);
            $('#serialnumber').show();
            $('#Hdd').show();
            $('#ram').show();
            $('#regip').hide();
        }

        else if(type == 'System'){
            alert(type);
            $('#serialnumber').show();
            $('#hardware_processor').show();
            $('#Hdd').show();
            $('#ram').show();
        }
        else if(type == 'Server'){
            alert(type);
            // $('#servermodel').show();
            $('#hardware_processor').show();
            $('#Hdd').show();
            $('#ram').show();
            $('#serialnumber').show();
        }
        else if(type == 'Laptop'){
            // alert(type);
            $('#servermodel').hide();
            $('#hardware_processor').show();
            $('#Hdd').show();
            $('#ram').show();
            
        }
        else{
            // alert(type);
            $('#Hdd').hide();
            $('#ram').hide();
            $('#serialnumber').show();
            $('#regip').hide();
        }
    });
});
</script>
<?php include 'links2.php';  ?>


<?php include 'footerhw.php';?>