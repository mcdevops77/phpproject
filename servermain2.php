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
                        <option value=""></option>
                        <option value="localserver">localserver</option>
                        <option value="AWS">AWS</option>
                    </select>               
                </div>
            </td>
        </tr>
        <tr>
            <td>Application Server Name</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_servername" id="appli_servername" class="form-control" >
                </div>
            </td>
        </tr>
     	<tr>
            <td>Belongs To</td>
            <td>
			    <div class="form-group">
			        <select class="form-control" name="Assetbelongs" id="Assetbelongs">
				        <option value="0">select belongs</option>
                        <option value="Eenadu">Eenadu</option>
                        <option value="MC">MC</option>
                        <option value="UKML">UKML</option>
                        <option value="EtvB">EtvB</option>
                        <option value="colorama">colorama</option>
			        </select>
			    </div>
		    </td>
        </tr>
        <tr id="Assetdevicecode">
            <td>Device code</td>
            <td>
		        <div class="form-group" id="Assetdevicecode">
			  <!-- <label> -->
			  	<input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control">
			  <!-- </label> -->
			  </div>
		    </td>
        </tr>
        <tr id="Make">
            <td>Make</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="Make" id="Make">
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
        <tr id="model_type">
            <td>Model Type</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="model_type" id="model_type">
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

                        <option value="ProDesk 6200 G4 MT">ProDesk 6200 G4 MT</option>
                        <!-- laptop -->
                        <option value="dell latitude">dell latitude</option>
                    </select>
                </div>           
            </td>      
        </tr>
        <tr>
            <td>Allocated IP Address</td>
            <td>
			    <div class="form-group">
    					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control">
            	</div>
		    </td>
        </tr>
        <tr>
            <td>second IP Address</td>
            <td>
                <div class="form-group">
                    <input type="text" name="sec_ipaddress" id="sec_ipaddress" class="form-control">
                </div>    
            </td>
        </tr>
        <tr>
            <td>Application DBname</td>
            <td>
                <div class="form-group">
                    <input type="text" name="application_DBname" id="application_DBname" class="form-control">
                
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
                        <label for="Inactive" value="0" style="padding-top:5px;">Inactive</label>
                    </div>
                    <div class="col-md-2">
                        <label class="switch">
                            <input type="checkbox">
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
		<input type="submit" name="Submit" value="Submit"  align="center" class="btn btn-success" >

        <!-- <input type="submit" name="Submit" value="Show"  align="center" class="btn btn-info" > -->
        <button type="button" class="btn btn-info" id="display" name="display">Info</button>

</div>
</div>
<div class="loading" id="loading">
<img src="giphy.gif" alt="">
</div>
</form>
<div id="serverdata"></div>

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
              // alert('AJAX call was successful!');
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

<!-- <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    responsive: true
                } );
            } );
</script> -->




 <script>

$(function(){
	$('#Assetdevicecode').hide();
	$('#Assetbelongs').change(function(){
    // code();
    // alert($(this).val());
    if($(this).val() == 'Eenadu') {
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
		}
	});
}); 
function code(){
    alert($('#Assetbelongs').val());
    if($('#Assetbelongs').val() == 'Eenadu') {
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
		}
}
</script> 

<script>
    $('#server').change(function(){
        if($('#server').val() == 'AWS'){
            $('#Assetbelongs').hide();
            $('#Assetdevicecode').hide();
            $('#model_type').hide();
            $('#Make').hide();
        } else{
            $('#Assetbelongs').show();
            $('#Assetdevicecode').show();
            $('#model_type').show();
            $('#Make').show();
        }
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


<div class="clearfix">
<?php include 'footer.php'; ?>

</div>

<?php include 'links.php';  ?>


