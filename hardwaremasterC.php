<?php include 'session.php'; ?>

<form method="post" name="hardwaremaster" action="hw_masterinserrt_new.php" id="hardwaremaster" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
        <tr>
            <td>Hardware Category Type</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_type" id="hw_type">
                        <option value="">select type</option>
                        <option value="System">System</option>
                        <option value="Server">Server</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Pendrive">Pendrive</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="NIC">NIC</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Mobile Tab">TAB</option>
                        <option value="External HDD">External HDD</option>
                        <option value="Internal HDD">Internal HDD</option>
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
        <tr id="servermodel" style="display: none;">
            <td>Type of Server</td>
            <td>
                <div class="form-group">
                    <select name="servertype" id="servertype" class="form-control">
                        <option value="">Select Server Type</option>
                        <option value="RackServer">RackServer</option>
                        <option value="TowerServer">TowerServer</option>
                    </select>
                </div>
            
            </td>
        </tr>
        <tr>
            <td>Manufacture</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_make" id="hw_make">
                        <option value="">select Manufacture </option>
                        <option value="Hp">Hp</option>
                        <option value="Dell">Dell</option>
                        <option value="lenovo">lenovo</option>
                        <option value="HCL">HCL</option>
                        <option value="I-Ball">I-Ball</option>
                        <option value="MAC">MAC</option>
                        <option value="Logistic">Logistic</option>
                        <option value="Toshiba">Toshiba</option>
                        <option value="Lava">Lava</option>
                        <option value="Samsung">Samsung</option>
                        <option value="IPhone">IPhone</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="OPPO">OPPO</option>
                        <option value="Vivo">Vivo</option>

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
                        <option value="DualCore">DualCore</option>
                        <option value="CorePentium">Pentium</option>
                        <!-- server hp -->
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
                        <option value="ProLiant ML350 G6">ProLiant ML350 G6</option>
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
                        <option value="Toshiba Satellite L650">Toshiba Satellite L650</option>

                        <!-- Accessiores -->
                        <option value="ps2">PS2-Mouse</option>
                        <option value="USB-Mouse">USB-Mouse</option>
                        <option value="ps2-Keyboard">PS2-Keyboard</option>
                        <option value="USB-Keyboard">USB-Keyboard</option>
                        <option value="Ultra Dual">Ultra Dual OTG</option>
                        <option value="USB 3.0">USB 3.0</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr id="hardware_processor" style="display: none;">
            <td>HardwareProcessor</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_processor" id="hw_processor">
                        <option value="">select Hardwareprocessor</option>
                        <!-- systems -->
                        <option value="Intel®core(TM)I5-8500">Intel®core(TM) I5-8500</option>
                        <option value="Intel®core(TM)I5-6600">Intel®core(TM)I5-6600</option>
                        <option value="Intel®core(TM)2 Duo CPU E7500">Intel®core(TM)2 Duo CPU E7500</option>
                        <!-- etvb servers -->
                        <option value="Intel(R)Xeon(R)CPU E5-2620v3@2.40GHz">Intel(R) Xeon(R) CPU E5-2620 v3 @ 2.40GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5-2609 0 @ 2.40GHz">Intel(R) Xeon(R) CPU E5-2609 0 @ 2.40GHz</option>
                        <!-- eenadu servers rack & tower hw processor -->
                        <option value="Intel(R) Xeon(R) CPU E5530 @ 2.40GHz">Intel(R) Xeon(R) CPU E5530 @ 2.40GHz</option>
                        <option value="Intel(R) Xeon(R) CPU X5550 @ 2.67GHz">Intel(R) Xeon(R) CPU X5550 @ 2.67GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5620 @ 2.40GHz">Intel(R) Xeon(R) CPU E5620 @ 2.40GHz</option>        
                        <option value="Intel(R) Xeon(R) CPU E5504  @ 2.00GHz">Intel(R) Xeon(R) CPU E5504  @ 2.00GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5504  @ 2.00GHz">Intel(R) Xeon(R) CPU E5504  @ 2.00GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5-2609 0 @ 2.40GHz">Intel(R) Xeon(R) CPU E5-2609 0 @ 2.40GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5504  @ 2.00GHz">Intel(R) Xeon(R) CPU E5504  @ 2.00GHz</option>
                        <option value="Intel(R) Core(TM) i3-2120 CPU @ 3.30GHz">Intel(R) Core(TM) i3-2120 CPU @ 3.30GHz</option>
                        <option value="Intel(R) Xeon(R) Bronze 3104 CPU @ 1.70GHz">Intel(R) Xeon(R) Bronze 3104 CPU @ 1.70GHz</option>
                        <option value="Intel®core(TM) i5-9500 CPU @ 3.00GHz">Intel®core(TM) i5-9500 CPU @ 3.00GHz</option>
                        <option value="Intel(R) Core(TM) i5-6600 CPU @ 3.30GHz">Intel(R) Core(TM) i5-6600 CPU @ 3.30GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5-2620 v3 @ 2.40GHz">Intel(R) Xeon(R) CPU E5-2620 v3 @ 2.40GHz</option>
                        <option value=" Intel(R) Xeon(R) CPU  E5504  @ 2.00GHz"> Intel(R) Xeon(R) CPU  E5504  @ 2.00GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E5-2620 v4 @ 2.10GH">Intel(R) Xeon(R) CPU E5-2620 v4 @ 2.10GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E3-1220 v3 @ 3.10GHz">Intel(R) Xeon(R) CPU E3-1220 v3 @ 3.10GHz</option>
                        <option value=" Intel(R) Xeon(R) CPU E3-1220 v3 @ 3.10GHz"> Intel(R) Xeon(R) CPU E3-1220 v3 @ 3.10GHz</option>
                        <option value=" Intel(R) Xeon(R) Gold 6138 CPU @ 2.00GHz"> Intel(R) Xeon(R) Gold 6138 CPU @ 2.00GHz</option>
                        <option value="Intel(R) Xeon(R) CPU E3-1220 v5 @ 3.00GHz ">Intel(R) Xeon(R) CPU E3-1220 v5 @ 3.00GHz </option>

                        <!-- laptops -->
                        <option value="Intel®core(TM)I3">Intel®core(TM)I3</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr id="ram" style="display: none;">
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
                        <option value="64GB">64GB</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr id="Hdd" style="display: none;">
            <td>Storage</td>
            <td>
                <div class="form-group">
                    <select class="form-control" name="hw_Hdd" id="hw_Hdd">
                        <option value="">select HDD</option>
                        <option value="160GB">160GB</option>
                        <option value="32GB">32GB</option>
                        <option value="64GB">64GB</option>
                        <option value="250GB">250GB</option>
                        <option value="300GB">300GB</option>
                        <option value="500GB">500GB</option>
                        <option value="1TB">1TB</option>
                        <option value="1.5TB">1.5TB</option>
                        <option value="2TB">2TB</option>
                        <option value="2.5TB">2.5TB</option>
                        <option value="4TB">4TB</option>
                        <option value="4.5TB">4.5TB</option>
                        <option value="3TB">3TB</option>
                        <option value="3.5TB">3.5TB</option>
                        <option value="5TB">5TB</option>
                        <option value="6TB">6TB</option>
                    </select>     
                </div>
            </td>
        </tr>
        <tr id="serialnumber">
            <td>Serial Number</td>
            <td>
                <div class="form-group">
                    <input type="text" name="serialno" id="serialno" class="form-control" placeholder="Enter Serial Number">
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
                        <option value="Deployed">Deployed</option>
                        <option value="Archived">Archived</option>                   
                        <option value="Broken">Broken</option>
                        <option value="In Repair">In Repair</option>
                        <option value="instock">In stock</option>
                        <option value="newstock">Newly Archived</option>
                        <option value="Outstock">Outstock</option>
                        <option value="scrap">scrap</option>
                        <option value="Pending">Pending</option>
                        <option value="Successful">Successful</option>
                        <option value="Returned">Returned</option>
                        <option value="At Admin">Admin</option>
                    </select>
                </div>             
            </td>
        </tr>
        <tr id="recevdate">
            <td>Date of Received</td>
            <td>
                <div class="form-group">
                    <input type="date" name="receiveddate" id="receiveddate" class="form-control" placeholder="Enter Date of Received">
                </div>
            </td>
        </tr>
    </tbody>
</table>
    <div class="button-centre">
	    <input type="submit" name="Submit" value="Submit"  id="btnsubmit" class="btn btn-success" >
        <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
    </div>
</div>
</div>
</form>



<?php include 'footer.php'; ?>

<script>
$(document).ready(function(){
  $("#resetform").click(function()
  {
    $("#hardwaremaster")[0].reset();
  });
});
</script>





<script>

$(document).ready(function(){
	$('#recevdate').hide();
	$('#status').change(function(){
    if($('#status').val() == 'newstock') {
      $('#recevdate').show();
     	} else{
      $('#recevdate').hide();
		}
	});
});

</script>


<script>
$(document).ready(function(){
    $('#hw_type').change(function(){
        var type = $(this).val();
        if(type == 'Mobiles'){
            // alert(type);
             $('#serialnumber').show();
            $('#Hdd').show();
            $('#ram').show();
        }
        else if(type == 'External HDD'){
            // alert(type);
             $('#serialnumber').show();
             $('#Hdd').show();
             $('#ram').hide();
        } else if(type == 'Internal HDD'){
            // alert(type);
            $('#serialnumber').show();
            $('#Hdd').show();
            $('#ram').hide();
        } else if(type == 'Pendrive'){
            // alert(type);
            $('#serialnumber').show();
            $('#Hdd').show();
            $('#ram').hide();
            $('#hardware_processor').hide();

        } else if(type == 'Mobile Tab'){
            // alert(type);
            $('#serialnumber').show();
            $('#Hdd').show();
            $('#ram').show();
        }

        else if(type == 'System'){
            // alert(type);
            $('#serialnumber').show();
            $('#hardware_processor').show();
            $('#Hdd').show();
            $('#ram').show();
        }
        else if(type == 'Server'){
            // alert(type);
            $('#servermodel').show();
            $('#hardware_processor').show();
            $('#Hdd').show();
            $('#ram').show();
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
            $('#hardware_processor').hide();




        }
    });
});





</script>