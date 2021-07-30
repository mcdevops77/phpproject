<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
               
               <th>ID</th>
               <th>Category</th>
               <th>Applicable As</th>
               <th>Device Allocated For</th>
               <th>Monitoring particular Server Type</th>
               <th>Monitoring Type</th>
               <th>Belongs To</th>
               <th>Device code</th>
               <th>Manufacture</th>
               <th>Model</th>
               <th>Hardware Details</th>
               <th>RAM</th>
               <th>HDD</th>
               <th>Serial No</th>
               <th>Operating System</th>
               <th>Refundable</th>
               <th>Assigned IPAddress</th>
               <th>SerialNumber</th>
               <th>Hardware Issues</th>
               <th>Software Issues</th>
               <th>Purpose of changing</th>
               <th>Backup Data Stored-In</th>
               <th>Device Received On</th>
               <th>Device Issued On</th>
               <th>Date of changed</th>
               <th>Location</th>
               <th>Current status</th>
               <th>Action</th>
     
            </tr>
                </thead>
                <tbody>
                    <?php

                        // include 'db_test.php';
                        include 'dbconn.php';
                                              
                           
                    //   echo  $stmt = "SELECT * from tbl_asset_monitoring inner join tbl_hardwaredetails_master_new on ast_monitoring_hw_model = hw_model
                    //                 left outer join tbl_asset_details ON ast_monitoring_hw_model = hardware_details";

                     $stmt = "SELECT * from tbl_asset_monitoring inner join tbl_hardwaredetails_master_new on ast_monitoring_hw_model = hw_model
                     inner join tbl_asset_details ON ast_monitoring_hw_model = hardware_details  and Allocated_ipaddress = ast_monitoring_ipaddress";

                        $rslt = mysqli_query($conn, $stmt);
                        if(mysqli_num_rows($rslt) > 0){
                            while($row = mysqli_fetch_assoc($rslt)){
                                // var_dump($row);
                                // echo '<pre>';
                                // print_r($row);
                    //             var_dump($result);
                    //         print_r($result);
                     ?>
            <tr>
                <td scope="row"><?php echo $row['ast_mointoring_id'];?></td> 
                <td><?php echo $row['Ast_category'];?></td>
                <td><?php echo $row['Applicable'];?></td>
                <td><?php echo $row['device_allocated'];?></td>
                <td><?php echo $row['ast_monitoring_particular_server'];?></td>
                <?php //}?>
         
                <td><?php echo $row['ast_monitoring_type'];?></td>
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
                <td><?php echo $row['ast_monitoring_ipaddress'];?></td>
                <td><?php echo $row['ast_monitoring_serialnum'];?></td>
                <td><?php echo $row['ast_monitoring_hw_issue'];?></td>
                <td><?php echo $row['ast_monitoring_sw_issue'];?></td>
                <td><?php echo $row['ast_monitoring_change_purpose'];?></td>
                <td><?php echo $row['ast_monitoring_backup_server_in'];?></td>
                <td><?php echo $row['dvc_recv'];?></td>
                <td><?php echo $row['dvc_put_to_user']; ?></td>
                <td><?php echo $row['ast_monitoring_changed_date']; ?></td>
                <td><?php echo $row['ast_monitoring_location'];?></td>
                <td><?php echo $row['ast_monitoring_status'];?></td>
                <td>
                    <a href="edit_maintainence.php?id=<?php echo $row['ast_mointoring_id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span>Update</a>
                    
                    <a href="delete_maintainence.php?id=<?php echo $row['ast_mointoring_id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                </td>
            
                        
            </tr>
                <?php
                        }
                    }
                     else{
                        echo "<script>alert('Something Went wrong, Please try later');</script>";
                        echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
                    }
                // }
                ?> 
                </tbody>
    </table>
</div>














































