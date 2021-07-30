<?php include 'session.php'; ?>

<p style="font-size:16px;font-weight:bold; text-align:center;">Welcome to Mc-Asset Maintainence</p>
                
<form method="post" name="search" action="searchprocess.php" id="search" style="border-radius:15px; border:10px; padding:15px;">
    <p style="text-align: center;"><img src="search.png">Search Form</p>
    <div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
      <tr>
        <td>Category</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="AssetCategory" id="AssetCategory">
                <option value=""></option>
                <option value="">select type</option>
                <option value="System">System</option>
                <option value="Server">Server</option>
                <option value="Mouse">Mouse</option>
                <option value="Pendrive">Pendrive</option>
                <option value="Keyboard">Keyboard</option>
                <option value="NIC">NIC</option>
                <option value="Monitor">Monitor</option>
                <option value="Mobiles">Mobiles</option>
                <option value="Mobile Tab">TAB</option>
                <option value="External HDD">Externadl HDD</option>
                <option value="Internal HDD">Internal HDD</option>
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
                <option value="EtvB">EtvBharat</option>
                <option value="colorama">colorama</option>
              </select>
              </div>
        </td>
      </tr>
      <tr>
        <tr>
        <td>Device code</td>
        <td>
        <div class="form-group">
                <input type="text" name="Assetdevicecode" id="Assetdevicecode" class="form-control">
              </div>
        </td>
      </tr>
    <tr>
        <td>Manufacture</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="Make_type" id="Make_type">
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
        <td>Model</td>
        <td>
            <div class="form-group">
              <select class="form-control" name="model_type" id="model_type">
                <option value="1"></option>
                <option value="">select model</option>
                <option value="Dell->7040">Dell->7040</option>
                <option value="Dell->3040">Dell->3040</option>
                <option value="Dell->7070">Dell->7070</option>
                <option value="Dell->3020">Dell->3020</option>
                <!--HCL MOdel-->
                <option value="Core 2 Duo">Core 2 Duo</option> 
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
               
              </select>
            </div>
        </td>
    </tr>
      <tr>
      <td>Allocated Ipaddress</td>
      <td>
      <div class="form-group">
      <input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control">
      </div>
      </td>
      </tr>
  </tr>
</tbody>
</table>
<div class="bs-example">
	<span class="icon-input-btn">
		<i class="fa fa-search"></i> 
		<input type="submit" class="btn btn-primary" value="Search" >
	
</div>

</div>
    </div>
</form>


<?php include 'footer.php';  ?>





