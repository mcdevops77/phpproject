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

<form method="post" name="users" action="userins.php" id="usermain" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table"  id="existed_records">

    <tbody>
        <tr>
            <td> Employee ID </td>
            <td>
            <div class="form-group">
            <input type="text" name="employeeid" id="employeeid" class="form-control">    
            </div>          
            </td>      
        </tr>
        <!-- <tr>
            <td>Employee Name</td>
            <td>
                <div>
                    <input type="text" name="emp_username" id="emp_username" class="form-control">
                
                </div>
            </td>
        </tr>
        <tr> -->
            <td>Category</td>
            <td>
			    <div class="form-group">
			        <select class="form-control" name="AssetCategory" id="AssetCategory">
                        <option value=""></option>
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
	    <tr>
            <td>Belongs To</td>
            <td>
			<div class="form-group">
                <select class="form-control" name="Assetbelongs" id="Assetbelongs">
                    <option value=""></option>
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
			  	<input type="text" name="Assetdevicecode" id="devicecode" class="form-control">
			  <!-- </label> -->
			  </div>
		</td>
        </tr>
        <tr>
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
        <tr>
        <td>Model Type</td>
        <td>
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
                 <!-- laptop -->
                 <option value="dell latitude">dell latitude</option>
            </select>           
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
    </tbody>
</table>
</div>
<div class="button-centre">
		<input type="submit" name="Submit" value="Submit"  align="center" class="btn btn-success" >

        <button type="button" class="btn btn-info" name="show" onclick="myFunction()">Show</button>
       
        
        
</div>
</div>
</form>

 <script>

function myFunction() {
    window.location.href="usershowdata.php";
  }
</script>



<!-- </div> --> 