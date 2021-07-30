<?php include 'session.php'; ?>

<p style="font-size:16px;font-weight:bold; text-align: center">Welcome to Mc-Asset Maintainence</p>

<form method="post" name="search" action="<?= $_SERVER['PHP_SELF']; ?>" id="search" style="border-radius:15px; border:10px; padding:15px;">
  <p style="text-align: center"><img src="search.png">Search Form </p>
  <div class="asset-tablepan">
    <div class="table-responsive">
      <table class="table border0-table">
        <tbody>
          <tr>
            <td>Category</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="AssetCategory" id="AssetCategory">
                  <option value="">select type</option>
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
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td>Belongs To</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="Assetbelongs" id="Assetbelongs">
                  <option value="">Asset Belongs To</option>
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
            <td>Device Serial Number</td>
            <td>
              <div class="form-group">
                <input type="text" name="serialnumber" id="serialnumber" class="form-control" placeholder="Enter serialnumber">
              </div>
            </td>
          </tr>
          <tr>
            <td>Manufacture</td>
            <td>
              <div class="form-group">
                <select class="form-control" name="Make_type" id="Make_type">
                  <option value="">Select Manufacture</option>
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
          <!-- <tr>
            <td>Allocated Ipaddress</td>
            <td>
              <div class="form-group">
                <input type="text" name="reg_ipaddress" id="reg_ipaddress" class="form-control">
              </div>
            </td>
          </tr> -->
          <!-- <tr>
              <td>Stock</td>
              <td>
                <div class="form-group">
                  <label class="radio-inline">
                    <input type="radio" name="optradio" value="in-stock">In Stock
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio" value="out-stock">Out Stock
                  </label>
                </div>
              </td>
            </tr> -->
        </tbody>
      </table>
    </div>
    <div class="button-centre">
      <button type="submit" class="btn btn-success" id="btnsearch" name="Search" value="Search"><i class="fa fa-search" aria-hidden="true"> </i> Search </button>
    </div>
  </div>
</form>

<!-- 
<div class="input-btn-back">
  <input type="button" value="Go Back to search" onclick="history.back(-1)" />
</div> -->





<?php $AssetCategory = isset($_POST['AssetCategory']) ? $_POST['AssetCategory'] : '';
      $Assetbelongs = isset($_POST['Assetbelongs']) ? $_POST['Assetbelongs'] : '';

// echo $AssetCategory;
// echo $Assetbelongs;
// echo $_POST['serialnumber'];
// echo $_POST['Make_type'];
// echo $_POST['model_type'];
?>

<div class="table-responsive">
  <?php if ($AssetCategory == "System" || $AssetCategory == "Servers" || $AssetCategory == "Laptop" ||  !empty($_POST['serialnumber']) || !empty($_POST['Make_type']) || !empty($_POST['model_type'])) {   ?>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Category</th>
          <th>Applicable</th>
          <th>Decive Allocated To</th>
          <th>Belongs</th>
          <th>Device code</th>
          <th>Manufacturer</th>
          <th>Model</th>
          <th>Hardware Details</th>
          <th>Hardware RAM</th>
          <th>Storage</th>
          <th>DeviceSerial No</th>
          <th>Operating System</th>
          <th>Refundable</th>
          <th>Assigned IPAddress</th>
          <th>Date of Recivied On</th>
          <th>Date of Issued On</th>
          <th>Location</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        <?php
          include 'db_test.php';
          $AssetCategory = $Assetbelongs = $reg_ipaddress = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $AssetCategory = $_POST['AssetCategory'];
          $Assetbelongs = $_POST['Assetbelongs'];
          // $reg_ipaddress = $_POST['reg_ipaddress'];
          $serialnumber =$_POST['serialnumber'];
          $make = $_POST['Make_type'];
          $mdl = $_POST['model_type'];

          
          $sql = "SELECT * from tbl_asset_details inner join tbl_hardwaredetails_master_new on device_serial_no = hw_serial_number  left outer join  tbl_employee_master on emp_code = device_allocated 
                     where ";
                      if(!empty($AssetCategory)){  
                        $sql .=" Ast_category = '$AssetCategory' ";
                      }
                      if(!empty($Assetbelongs)){
                      $sql .="and Ast_belongs = '$Assetbelongs' ";
                      } 
                     
                     if(!empty($serialnumber) && empty($Assetbelongs) && empty($AssetCategory)){
                      $sql .= " hw_serial_number = '$serialnumber' ";
                     }elseif(!empty($serialnumber)){
                      $sql .= "and hw_serial_number = '$serialnumber' ";
                     }

                     if(!empty($make) && empty($AssetCategory) && empty($Assetbelongs)){
                       $sql .=" hw_manufacture = '$make' ";
                     }elseif(!empty($make)){
                       $sql .= " or hw_manufacture = '$make' ";
                     }

                     if(!empty($mdl) && empty($Assetbelongs) && empty($AssetCategory)){
                       $sql .= " hw_model = '$mdl' ";
                     } elseif(!empty($mdl)){
                       $sql .= " or hw_model = '$mdl' ";
                     }

                    //  echo $sql;
          $result = mysqli_query($conn, $sql) or die('error');
          if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
              <tr>
                <td><?php echo $row['Ast_category']; ?></td>
                <td><?php echo $row['Applicable']; ?></td>
                <?php if ($row['Applicable'] == 'Userpc') { ?>
                  <td><?php echo $row['emp_name']; ?></td>
                <?php } else { ?>
                  <td><?php echo $row['device_allocated']; ?></td>
                <?php } ?>
                <td><?php echo $row['Ast_belongs']; ?></td>
                <td><?php echo $row['Ast_dvc_code']; ?></td>
                <td><?php echo $row['hw_manufacture']; ?></td>
                <td><?php echo $row['hw_model']; ?></td>
                <td><?php echo $row['hw_processor']; ?></td>
                <td><?php echo $row['hw_ram']; ?></td>
                <td><?php echo $row['hw_Hdd']; ?></td>
                <td><?php echo $row['device_serial_no']; ?></td>
                <td><?php echo $row['OS']; ?></td>
                <td><?php echo $row['is_item_refundable']; ?></td>
                <td><?php echo $row['Allocated_ipaddress']; ?></td>
                <td><?php echo $row['dvc_recv']; ?></td>
                <td><?php echo $row['dvc_put_to_user']; ?></td>
                <td><?php echo $row['Ast_location']; ?></td>
                <td><?php echo $row['ast_current_status']; ?></td>
              </tr>
        <?php
            }
          } else {
            echo "<script>alert('Data not found');</script>";
          }
          mysqli_close($conn);
        }
      
        ?>
      </tbody>
    </table>



  <?php } else if ($AssetCategory == "Pendrive" || $AssetCategory == "Mouse" || $AssetCategory == "Mobile Tab" || $AssetCategory == "External HDD"  ) {    ?>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Category</th>
          <th>Manufacture</th>
          <th>Model</th>
          <th>RAM</th>
          <th>Storge</th>
          <th>Serial Number</th>
          <th>Asset Name</th>
          <th>Monitoring type</th>
          <th>Hardware Issues</th>
          <th>Software Issues</th>
          <th>Purpose</th>
          <th>Date</th>
          <th>Location</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php

        include 'db_test.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $AssetCategory = $_POST['AssetCategory'];
          $serialnumber = $_POST['serialnumber'];
          $make = $_POST['Make_type'];
          $mdl = $_POST['model_type'];

        $stmt = "SELECT * from tbl_hardwaredetails_master_new inner join tbl_asset_monitoring on ast_monitoring_serialnum = hw_serial_number 
                   where ";
                    if(!empty($AssetCategory)){ 
                    $stmt .=" hw_category_type = '$AssetCategory' "; 
                    }        
                    if(!empty($serialnumber)){
                    $stmt .= "or hw_serial_number = '$serialnumber' ";
                    }
                    
                    // echo $stmt;
          $result = mysqli_query($conn, $stmt) or die('error');
          if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) {
              // echo '<pre>';
              // print_r($row);
              // var_dump($result);
        ?>

              <tr>
                <td><?php echo $row['hw_category_type']; ?></td>
                <td><?php echo $row['hw_manufacture']; ?></td>
                <td><?php echo $row['hw_model']; ?></td>
                <td><?php echo $row['hw_ram']; ?></td>
                <td><?php echo $row['hw_Hdd']; ?></td>
                <td><?php echo $row['hw_serial_number']; ?></td>
                <td><?php echo $row['ast_monitoring_name']; ?></td>
                <td><?php echo $row['ast_monitoring_type']; ?></td>
                <td><?php echo $row['ast_monitoring_hw_issue']; ?></td>
                <td><?php echo $row['ast_monitoring_sw_issue']; ?></td>
                <td><?php echo $row['ast_monitoring_change_purpose']; ?></td>
                <td><?php echo $row['ast_monitoring_changed_date']; ?></td>
                <td><?php echo $row['ast_monitoring_location']; ?></td>
                <td><?php echo $row['hw_status']; ?></td>
              </tr>
        <?php
            }
          } else {
            echo "no result";
          }
          mysqli_close($conn);
        }
        ?>
      </tbody>
    </table>
</div>




<?php } ?>
</div>








<div class="clearfix">

  <?php include 'footer.php';  ?>
</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excel', 'pdf', 'print'
      ],
      responsive: true
    });
  });
</script>





<script>
  $(document).ready(function (){
    $('#btnsearch').click(function(){
      var cat = $('#AssetCategory');

      var belongs = $('#Assetbelongs');

      var sno = $('#serialnumber');

      var mk = $('#Make_type');

      var mdl = $('#model_type');

      // if(cat.val() == ""){
      // alert("please select or specify any one of them");
      // return false;
      // }

      // if(belongs.val() == "" || belongs.val() == null){
      //   alert("please select belongs");
      //   return false;
      // }

      if(belongs.val() == 'Eenadu' || belongs.val() == 'MC' || belongs.val() == 'UKML' || belongs.val() == 'EtvB' || belongs.val() == 'colorama'){
        if(cat.val() == ""){
          alert("please select cat");
        }
      }
      if(cat.val() == "" && sno.val() == "" && mk.val() == "" && mdl.val() == ""){
        alert("Please select or specify one of them");
        return false;
      }
      
    });

  });
</script>

<script>
  
</script>
























<?php include 'links.php'; ?>