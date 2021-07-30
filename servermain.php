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


<style>
    <?php include 'css/toggle.css'; ?>
</style>

<style>

.loading 
            {
                text-align: center;
                display: block;
            }
</style>



<form method="post" name="servermain" action="servermainins.php" id="servermain" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">

    <tbody>
        <tr>
            <td>Server</td>
            <td>
                <div class="form-group">
                    <select name="server" id="server" class="form-control">
                        <option value="">select server</option>
                        <option value="localserver">localserver</option>
                        <option value="AWS">AWS</option>
                    </select>               
                </div>
            </td>
        </tr>
        <tr id="Particular">
            <td>Particular Server</td>
            <td>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="Particular" id="serverparticular"  value="live">Live Server
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="Particular" id="serverparticular"  value="backup">Backup Server
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="Particular" id="serverparticular"  value="Testing">Testing Server
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Application Server Name</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_servername" id="appli_servername" class="form-control" placeholder="Server Name">
                </div>
            </td>
        </tr>
        <tr>
            <td>Device Serial Number</td>
            <td>
		        <div class="form-group" id="Assetdevicecode">

			  	<input type="text" name="Assetserialno" id="Assetserialno" class="form-control"  placeholder="Serial Number">
			  </div>
		    </td>
        </tr> 
        
        <tr>
            <td>Allocated IP Address</td>
            <td>
			    <div class="form-group">
    					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control"  placeholder="Enter IPAddress">
            	</div>
		    </td>
        </tr>
        <tr>
            <td>second IP Address</td>
            <td>
                <div class="form-group">
                    <input type="text" name="sec_ipaddress" id="sec_ipaddress" class="form-control"  placeholder="Enter Second IPAddress">
                </div>    
            </td>
        </tr>
        <tr>
            <td>Application Live DBName</td>
            <td>
                <div class="form-group">
                    <input type="text" name="application_DBname" id="application_DBname" class="form-control">
                
                </div>
            </td>
        </tr>
        <tr>
            <td>Apache Version</td>
            <td>
                <div class="form-group">
                    <input type="text" name="apache_version" id="apache_version" class="form-control">
                
                </div>
            </td>
        </tr>
        <tr>
            <td>DataBase Version</td>
            <td>
                <div class="form-group">
                    <input type="text" name="DBversion" id="DBversion" class="form-control">
                
                </div>
            </td>
        </tr>
        <tr>
            <td>Application SustainBy</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_sustainby" id="appli_sustainby" class="form-control">
                
                </div>
            </td>
        </tr>
        <tr>
            <td>Remarks</td>
            <td>
                <div class="form-group">
                    <input type="text" name="remarks" id="remarks" class="form-control">
                </div>
            </td>
        </tr>
        <tr id="server_status">
            <td>status</td>
            <td>
                <div class="form-group">
                    <div class="col-md-2 text-right">
                        <label for="Inactive"  style="padding-top:5px;">Inactive</label>
                    </div>
                    <div class="col-md-2">
                        <label class="switch">
                            <input type="checkbox" id="status" name="status">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-md-2 text-left" >
                        <label for="Active" value="1" style="padding-top: 5px;" >Active</label>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</div>
<div class="button-centre">
		<input type="submit" name="Submit" value="Save" id="submitdata" class="btn btn-success" style="text-align: center;" >

        <!-- <input type="submit" name="Submit" value="Show"  align="center" class="btn btn-info" > -->
        <button type="button" class="btn btn-info" id="display" name="display">Display Data</button>

</div>
</div>
<div class="loading" id="loading">
<img src="Blocks.gif" alt="">
</div>
</form>
<div id="serverdata"></div>
<div class="clearfix">
<?php include 'footer.php'; ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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


<script type="text/javascript">
 $('#display').click(function(){
 
      $.ajax({
            url: 'serverdatashow.php',
            type:"POST",
            success:function(data){
              alert('AJAX call was successful!');
              console.log(data);
              $("#serverdata").html(data);
              $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel'
                    ],
                    responsive: true
                } );
            } );
          
            }
        });
 });
</script>






<script>

$('#display').click(function(){
    if($('#datatable').is(':hidden')) {
        $('#datatable').show()
    } else{
        $('#datatable').hide()
    }

});


</script>



<script>
  $(function(){
    $('#Particular').hide();
    $('#server').change(function(){
      if($('#server').val() == 'localserver'){
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }
    });
  });
</script>







<?php include 'links.php';  ?>

