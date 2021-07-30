<?php
include 'session.php';
?>

<p style="text-align:center;font-size:16px;font-weight:bold;"> Welcome to Mc-Asset Maintainence</p>


<br> <div class="input-btn-back">

<input type="button" value="Go Back to search" onclick="history.back(-1)" />
</div>

<br>

<div class="table-responsive">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>  
                <th>Category</th>
                <th>Application Type</th>
                <th>Applicable</th>
                <th>Decive Allocated To</th>
                <th>Application Particular Server type</th>
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
                <th>Application Project DB</th>
                <th>Application Project maintainby</th>
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
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            $AssetCategory = $_POST['AssetCategory'];
                            $Assetbelongs = $_POST['Assetbelongs'];
                            $reg_ipaddress = $_POST['reg_ipaddress'];

                        if($AssetCategory != "" || $Assetbelongs != "" || $reg_ipaddress != "" ){
                                        
                      $sql = "SELECT * from tbl_asset_details inner join tbl_hardwaredetails_master_new on hardware_details = hw_model 
                     inner join  tbl_application_server_master  on Allocated_ipaddress = appli_server_ipaddress 
                     where Ast_category = '$AssetCategory' or Ast_belongs = '$Assetbelongs' or Allocated_ipaddress = '$reg_ipaddress'";

                     $result = mysqli_query($conn, $sql) or die('error');
                        if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_array($result)){
                            
                    ?>
                        <tr>
                        
                            <td><?php echo $row['Ast_category'];?></td>
                            <td><?php echo $row['appli_server'];?></td>
                            <td><?php echo $row['Applicable'];?></td>
                            <?php if($row['Applicable'] == 'Userpc'){ ?>
                            <td><?php echo $row['emp_name']; ?></td>
                            <?php }else{?>
                            <td><?php echo $row['device_allocated'];?></td>
                            <?php }?>
                            <td><?php echo $row['appli_praticular_server'];?></td>
                            <td><?php echo $row['Ast_belongs'];?></td>
                            <td><?php echo $row['Ast_dvc_code'];?></td>
                            <td><?php echo $row['hw_manufacture'];?></td>
                            <td><?php echo $row['hw_model'];?></td>
                            <td><?php echo $row['hw_processor'];?></td>
                            <td><?php echo $row['hw_ram'];?></td>
                            <td><?php echo $row['hw_Hdd'];?></td>
                            <td><?php echo $row['device_serial_no'];?></td>
                            <td><?php echo $row['OS'];?></td>
                            <td><?php echo $row['is_item_refundable'];?></td>
                            <td><?php echo $row['Allocated_ipaddress'];?></td>
                            <td><?php echo $row['appli_server_project_main_db'];?></td>
                            <td><?php echo $row['appli_project_handledby'];?></td>
                            <td><?php echo $row['dvc_recv'];?></td>
                            <td><?php echo $row['dvc_put_to_user']; ?></td>
                            <td><?php echo $row['Ast_location'];?></td>
                            <td><?php echo $row['ast_current_status'];?></td>
                            
                                
                            
                        </tr>
                            <?php
                            }   
                        } else{
                                echo "<script>alert('Data not found');</script>";
                        }
                        } mysqli_close($conn);
                        }
                
                        ?>
            </tbody>
    </table>
</div>


<div class="clearfix">

<?php include 'footer.php';  ?>
</div>  

<script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'pdf', 'print'
                    ],
                    responsive: true
                } );
            } );
</script>

<?php include 'links.php'; ?>

<!-- 
$res = mysqli_fetch_row($result);
var_dump($res);
echo "<pre>"; print_r($res);

?> -->

