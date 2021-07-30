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


<form method="post" name="hardwaremaster" action="hardwaremasterinsert.php" id="hardwaremaster" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
        <tr>
            <td>Make</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_make" id="hw_make">
                        <option value="">select Make</option>
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
            <td>HardwareProcessor</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_processor" id="hw_processor">
                        <option value="">select Hardwareprocessor</option>
                         <option value="Intel®core I5 @3.20GHZ">Intel®core I5 @3.20GHZ </option>
                        <option value="Intel®Core I7 @3.2GHZ">Intel®Core I7 @3.2GHZ</option>
                        <option value="Intel®core i3 @ 3.2GHZ">Intel®core i3 @ 3.2GHZ</option>  
                        <option value=">Intel®Core(TM) i5-8500 CPU" >Intel(R)Core(TM) i5-8500 CPU </option>   
                    </select>     
                </div>
            </td>
        </tr>
        <tr>
            <td>Ram Type</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_ram" id="hw_ram">
                        <option value="">select ram</option>
                        <option value="2GB">2GB</option>
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr>
            <td>HardDisk</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_Hdd" id="hw_Hdd">
                        <option value="">select HDD</option>
                        <option value="160GB">160GB</option>
                        <option value="250GB">250GB</option>
                        <option value="300GB">300GB</option>
                        <option value="500GB">500GB</option>
                        <option value="1TB">1TB</option>
                        <option value="2TB">2TB</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr>
            <td>Hardware Type</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_type" id="hw_type">
                        <option value="">select type</option>
                        <option value="System">System</option>
                        <option value="Server">Server</option>
                    </select>     
                </div>
            </td>
        </tr>
    </tbody>
</table>
    <div class="button-centre">
	    <input type="submit" name="Submit" value="Submit"  align="center" class="btn btn-success">
        <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
    </div>
</div>
</div>
</form>


<?php include 'footer.php'; ?>