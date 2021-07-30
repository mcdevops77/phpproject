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

<?php
include_once 'db_test.php';
?>


<form method="POST" action="editserverdata.php?id=<?php echo $_GET['id']; ?>"name="serveredit" id="serveredit" style="border-radius:15px; border:10px; padding:15px;">
<?php
$serid = $_GET['id'];
$rs=mysqli_query($conn, "SELECT * FROM  tbl_application_server_master WHERE id='$serid'");
// $rs=mysqli_query($conn, "SELECT * FROM tbl_application_server_master a inner join  tbl_new_asset b on
//                                         b.make_type = a.appli_server_make WHERE a.id='$serid'");
while($row=mysqli_fetch_array($rs)){
?>
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">

    <tbody>
        <tr>
            <td>Server</td>
            <td>
                <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']; ?>">
                    <select name="server" id="server" class="form-control">
                        <option value="">select server</option>
                        <option value="localserver" <?php if($row["appli_server"] == 'localserver'){
                             echo "selected"; } ?> >localserver
                        </option>
                        <option value="AWS" <?php if($row["appli_server"] == 'AWS'){
                            echo "selected"; } ?> >AWS
                        </option>
                    </select>               
                </div>
            </td>
        </tr>
        <tr id="Particular">
            <td>Particular Server</td>
            <td>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="Particular"  value="live" <?php if($row['appli_praticular_server']== 'live'){ echo "checked";} ?>>Live Server
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="Particular" value="backup" <?php if($row['appli_praticular_server']== 'backup'){ echo "checked";} ?>>Backup Server
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="Particular" value="Testing" <?php if($row['appli_praticular_server']== 'Testing'){ echo "checked";} ?> >Testing Server
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Application Server Name</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_servername" id="appli_servername" class="form-control" value="<?php echo $row['appli_server_name']; ?>" >
                </div>
            </td>
        </tr>
        
        <tr>
            <td>Allocated IP Address</td>
            <td>
			    <div class="form-group">
    					<input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control" value="<?php echo $row['appli_server_ipaddress']; ?>">
            	</div>
		    </td>
        </tr>
        <tr>
            <td>second IP Address</td>
            <td>
                <div class="form-group">
                    <input type="text" name="sec_ipaddress" id="sec_ipaddress" class="form-control" value="<?php echo $row['appli_server_sec_ipaddress']; ?>">
                </div>    
            </td>
        </tr>
        <tr>
            <td>Application DBname</td>
            <td>
                <div class="form-group">
                    <input type="text" name="application_DBname" id="application_DBname" class="form-control" value="<?php echo $row['appli_server_project_main_db']; ?>">
                
                </div>
            </td>
        </tr>
        <tr>
            <td>Application SustainBy</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_sustainby" id="appli_sustainby" class="form-control" value="<?php echo $row['appli_project_handledby']; ?>"   >
                
                </div>
            </td>
        </tr>
        <tr>
            <td>Remarks</td>
            <td>
                <div class="form-group">
                    <input type="text" name="remarks" id="remarks" class="form-control" value="<?php echo $row['Remarks']; ?>" >
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
               <?php  //echo $row['server_status'];  ?>
                    <?php if($row['server_status'] == 'on'){

                            // var_dump($status);
                            echo 
                        '<label class="switch">
                            <input type="checkbox" checked name="status">
                            <span class="slider round"></span>
                        </label>';
                    } else {
                        echo '<label class="switch">
                            <input type="checkbox"  name="status">
                            <span class="slider round"></span>
                        </label>';
                    }
                        ?>

                    </div>
                    <div class="col-md-2 text-left" >
                        <label for="Active" style="padding-top: 5px;" >Active</label>
                    </div>
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
<div class="clearfix">
<?php include 'footer.php'; ?>

</div>
</form>




<!-- <script>
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
</script> -->




<script>
$(document).ready(function(){
    par();
    function par(){
      if($('#server').val() == 'localserver'){
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }       
    }
	//$('#Particular').hide(); 
    $('#server').change(function(){
      if($('#server').val() == 'localserver'){
        $('#Particular').show();
      } else{
        $('#Particular').hide();
      }
	});
});
</script>
