<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>


<!-- <div class="container">
	<div class="row">
        <div class="col-md-12">

        </div>
    </div>

<div class="row">
		<div class="col-md-12"> -->
         <div class="table-responsive">
			<table id="example" class="table table-striped table-bordered"style="width:1650%">
                <thead>
                    <tr>
                         
                        <th>ID</th>
                        <th>Category</th>
                        <th>Applicable As</th>
                        <th>Device Allocated For</th>
                        <th>Belongs To</th>
                        <th>Device code</th>
                        <th>Make Type</th>
                        <th>Model</th>
                        <th>Hardware Details</th>
                        <th>RAM</th>
                        <th>HDD</th>
                        <th>DeviceSerial No</th>
                        <th>Operating System</th>
                        <th>Refundable</th>
                        <th>Assigned IPAddress</th>
                        <th>Device Received On</th>
                        <th>Device Issued On</th>
                        <th>Location</th>
                        <th>Current Status</th>
                        <th>Action</th>
     
                    </tr>
                </thead>
                <tbody>
                    <?php

                        // include 'db_test.php';
                        include 'dbconn.php';

                        // $AssetCategory = $_GET['Assetcategory'];
                        // print_r($_GET);
                        // if($AssetCategory == "System" ){
                            


                        $sql = "SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master_new on hardware_details = hw_model
                        left outer join  tbl_employee_master on emp_code = device_allocated";

                        // } else if($AssetCategory == "Servers"){

                        // $sql = " SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master on hardware_details = hw_processor where Ast_Category = 'Servers'"; 
                        // }
                    
            
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['Applicable']==1){
                                    $ref = 'User Pc';
                                } else{
                                    $ref = 'Server';
                                }
                                
                                // var_dump($result);
                    ?>
                    <tr>
                        <td scope="row"><?php echo $row['asset_detail_id'];?></td> 
                        <td><?php echo $row['Ast_category'];?></td>
                        <td><?php echo $ref; ?></td>
                        <!-- <td><?php //echo $row['Applicable'];?></td> -->
                        <?php if($row['Ast_category'] == 'System'){ ?>
                        <td><?php echo $row['emp_name'];?></td>
                        <?php }else{?>
                            <td><?php echo $row['device_allocated'];?></td>
                        <?php }?>
                       <!-- <td><?php// echo $ref; ?></td> -->
                        <td><?php echo $row['Ast_belongs'];?></td>
                        <td><?php echo $row['Ast_dvc_code'];?></td>
                        <td><?php echo $row['hw_manufacture'];?></td>
                        <td><?php echo $row['hw_model'];?></td>
                        <td><?php echo $row['hardware_details'];?></td>
                        <td><?php echo $row['hw_ram'];?></td>
                        <td><?php echo $row['hw_Hdd'];?></td>
                        <td><?php echo $row['device_serial_no'];?></td>
                        <td><?php echo $row['OS'];?></td>
                        <td><?php echo $row['is_item_refundable'];?></td>
                        <td><?php echo $row['Allocated_ipaddress'];?></td>
                        <td><?php echo $row['dvc_recv'];?></td>
                        <td><?php echo $row['dvc_put_to_user']; ?></td>
                        <td><?php echo $row['Ast_location'];?></td>
                        <td><?php echo $row['ast_current_status'];?></td>
                        <td>
                        <a href="editSYS.php?id=<?php echo $row['asset_detail_id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span>Update</a>
                    
                        <a href="deletesystrans.php?id=<?php echo $row['asset_detail_id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>
                        
                    </tr>
                </tbody>
                <?php
                        }
                    }
                     else{
                        echo "<script>alert('Something Went wrong, Please try later');</script>";
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                ?> 
            </table>
        </div>
    <!-- </div> -->
<!-- </div> -->
<!-- </div> -->














































