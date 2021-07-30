<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'header.php';
include_once 'db_test.php';
?>
<?php
   $ser_id = $_GET['id'];
   $sql = "SELECT * FROM tbl_application_server_master WHERE id = '".$ser_id."'";
   $result = mysqli_query($conn, $sql);
//    $res = mysqli_fetch_assoc($result);
//    var_dump($res);
//    echo "<pre>"; print_r($res);

    while($res = mysqli_fetch_array($result)){
        $Assetdevicecode = isset($_POST['Assetdevicecode']) ?  $_POST['Assetdevicecode'] : '';
    }

?>

<form method="post" name="servermain" action="edit.php" id="servermain" style="border-radius:15px; border:10px; padding:15px;">
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
                        <option value="localserver" <?php if($server == 'localserver') { echo "selected"; } ?>>localserver</option>
                        <option value="AWS">AWS</option>
                    </select>               
                </div>
            </td>
        </tr>
        <tr>
            <td>Application Server Name</td>
            <td>
                <div class="form-group">
                    <input type="text" name="appli_servername" id="appli_servername" class="form-control" value="<?php echo $appli_servername; ?>" >
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
			  	<input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control" value="<?php echo $Assetdevicecode; ?> " >
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
		<input type="submit" name="update" value="Update"  align="center" class="btn btn-success" >

        <!-- <input type="submit" name="Submit" value="Show"  align="center" class="btn btn-info" > -->
        <button type="button" class="btn btn-info" id="display" name="display">Info</button>

</div>
</div>
</form>