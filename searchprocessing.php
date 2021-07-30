<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include_once 'db_test.php';
include_once 'header.php';

// $sql = "SELECT * FROM tbl_assets_new WHERE Ast_category = '$AssetCategory' or Ast_belongs = '$Assetbelongs' or make_type = '$Make_type' or model = '$model_type' or reg_user = '$reg_user'";

?>

<!-- <p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-Asset Maintainence</p> -->

<p style="text-align:center;font-size:16px;font-weight:bold;"> Welcome to Mc-Asset Maintainence</p>
<br>
<br>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>Category</th>
            <th>Belongs To</th>
            <th>Device code</th>
            <th>Make Type</th>
            <th>Model</th>
            <th>Hardware Details</th>
            <th>DeviceSerial No</th>
            <th>Operating System</th>
            <th>Decive Allocated To</th>
            <th>Is Item Refundable</th>
            <th>Registerd For</th>
            <th>Assigned IPAddress</th>
            <th>Device Recivied On</th>
            <th>Put To User On</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php

        // include 'db_test.php';
         if(isset($_POST['Submit'])) {
            //  $id = $_POST['id'];
            $AssetCategory = $_POST['AssetCategory'];
            $Assetbelongs = $_POST['Assetbelongs'];
            $Make_type = $_POST['Make_type'];
            $model_type = $_POST['model_type'];
            $reg_user = $_POST['Ast_reg_user'];
            $reg_ipaddress = $_POST['reg_ipaddress'];

            if($AssetCategory != "" || $Assetbelongs != "" || $reg_ipaddress != "" ){

       echo $sql = "select * from tbl_assets_td_new where Ast_category = '$AssetCategory' or Ast_belongs = '$Assetbelongs' or make_type = '$Make_type' or model = '$model_type' or reg_user = '$reg_user' or Allocated_ipaddress = '$reg_ipaddress'";
        
        $result = mysqli_query($conn, $sql) or die('error');
        $records = mysqli_num_rows($result);     
          
        //  $result = mysqli_query($conn, $sql) or die('error');
            if(!empty($records)){
            //  if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_array($result)){
                     if($row['is_item_refundable']==1){
                           $ref = 'Yes'; 
                     } else{
                         $ref ='No';
                     }
                ?>
                <tr>
                <td scope="row"><?php echo $row['id'];?></td>
                <td><?php echo $row['Ast_category'];?></td>
                <td><?php echo $row['Ast_belongs'];?></td>
                <td><?php echo $row['Ast_dvc_code'];?></td>
                <td><?php echo $row['make_type'];?></td>
                <td><?php echo $row['model'];?></td>
                <td><?php echo $row['hardware_details'];?></td>
                <td><?php echo $row['device_serial_no'];?></td>
                <td><?php echo $row['OS'];?></td>
                <td><?php echo $row['device_allocated'];?></td>
                <td><?php echo $ref; ?></td>
                <td><?php echo $row['reg_user'];?></td>
                <td><?php echo $row['Allocated_ipaddress'];?></td>
                <td><?php echo $row['dvc_recv'];?></td>
                <td><?php echo $row['dvc_put_to_user'];?></td>
                <td><?php echo $row['Ast_location'];?></td>
                <td>
                    <!-- <button class="btn" onclick="document.location='assetedit.php'"><i class="fa fa-pencil"></i> Edit</button> -->
                    <a href="assetedit.php?id=<?php echo $row['id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                    <!-- <button class="btn"><i class="fa fa-trash"></i> Delete</button>  -->
                    <a href="assetdelete.php?id=<?php echo $row['id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');"><i class="fa fa-trash"></i>Delete</a>
                    
                </td>
            </tr>
            <?php
            }
        }
        else{
        echo "<script>alert('No Records are found in Your Search!!');</script>";
    }
}
    }
    ?>
</tbody>
    </table>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    responsive: true
                } );
            } );
</script>


