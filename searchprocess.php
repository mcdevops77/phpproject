<?php include 'session.php'; ?>

<p style="text-align:center;font-size:16px;font-weight:bold;"> Welcome to Mc-Asset Maintainence</p>


<br> <div class="input-btn-back">

<input type="button" value="Go Back to search" onclick="history.back(-1)" />
</div>

<br>

<?php $AssetCategory = $_POST['AssetCategory'];
    // $project    =$_POST['appli_server_project_main_db'];
echo $AssetCategory;
// echo $project;

?>
<div class="table-responsive">
<?php  if($AssetCategory == "System" || $AssetCategory == "Servers" || $AssetCategory == "Laptop")  {   ?>
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
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            $AssetCategory = $_POST['AssetCategory'];
                            $Assetbelongs = $_POST['Assetbelongs'];
                            $reg_ipaddress = $_POST['reg_ipaddress'];

                                        
                      $sql = "SELECT * from tbl_asset_details inner join tbl_hardwaredetails_master_new on device_serial_no = hw_serial_number  left outer join  tbl_employee_master on emp_code = device_allocated
                    --  inner join  tbl_application_server_master  on Allocated_ipaddress = appli_server_ipaddress 
                     where Ast_category = '$AssetCategory' or Ast_belongs = '$Assetbelongs' or Allocated_ipaddress = '$reg_ipaddress'";

                     $result = mysqli_query($conn, $sql) or die('error');
                        if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_array($result)){
                            
                    ?>
                        <tr>
                        
                            <td><?php echo $row['Ast_category'];?></td>
                            <!-- <td><?php //echo $row['appli_server'];?></td> -->
                            <td><?php echo $row['Applicable'];?></td>
                            <?php if($row['Applicable'] == 'Userpc'){ ?>
                            <td><?php echo $row['emp_name']; ?></td>
                            <?php }else{?>
                            <td><?php echo $row['device_allocated'];?></td>
                            <?php }?>
                            <!-- <td><?php //echo $row['appli_praticular_server'];?></td> -->
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
                            <!-- <td><?php //echo $row['appli_server_project_main_db'];?></td>
                            <td><?php //echo $row['appli_project_handledby'];?></td> -->
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
                         mysqli_close($conn);
                        }
                
                        ?>
            </tbody>
    </table>





<?php } else if($AssetCategory == "Pendrive" || $AssetCategory == "Mouse" || $AssetCategory == "Mobile Tab" || $AssetCategory == "External HDD" ){    ?>

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
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $AssetCategory = $_POST['AssetCategory'];
              echo  $stmt = "SELECT * from tbl_hardwaredetails_master_new inner join tbl_asset_monitoring on  ast_monitoring_hw_model = hw_model where hw_category_type = 'Pendrive' ";
                    
                    $result = mysqli_query($conn, $stmt) or die('error');
                        if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_array($result)){  
                            echo '<pre>';
                            print_r($row);
                            var_dump($result);
            ?> 

                        <tr>
                            <td><?php echo $row['hw_category_type'];?></td>
                            <td><?php echo $row['hw_manufacture'];?></td>
                            <td><?php echo $row['hw_model'];?></td>
                            <td><?php echo $row['hw_ram'];?></td>
                            <td><?php echo $row['hw_Hdd'];?></td>
                            <td><?php echo $row['hw_serial_number'];?></td>
                            <td><?php echo $row['ast_monitoring_name'];?></td>
                            <td><?php echo $row['ast_monitoring_type'];?></td>
                            <td><?php echo $row['ast_monitoring_hw_issue'];?></td>
                            <td><?php echo $row['ast_monitoring_sw_issue'];?></td>
                            <td><?php echo $row['ast_monitoring_change_purpose'];?></td>
                            <td><?php echo $row['ast_monitoring_changed_date'];?></td>
                            <td><?php echo $row['ast_monitoring_location'];?></td>
                            <td><?php echo $row['hw_status'];?></td>
                        </tr>

            <?php
                
                     } 
                    } else{
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