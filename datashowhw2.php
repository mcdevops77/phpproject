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
                        <th>DeviceSerial No</th>
                        <th>Operating System</th>
                        <th>Is Item Refundable</th>
                        <th>Assigned IPAddress</th>
                        <th>Device Received On</th>
                        <th>Device Issued On</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        // include 'db_test.php';
                        include 'dbconn.php';

                        if(isset($_POST['button'])){

                           
                        
                            if($AssetCategory == "System" ){
                                

                        $sql = "SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master on hardware_details = hw_processor 
                        inner join  tbl_employee_master on emp_code = device_allocated where Ast_category = 'System'";

                        } else if($AssetCategory == "Servers"){
                            
                           $sql = "SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master  on hardware_details = hw_processor  where Ast_category = 'Servers'";
                        
                        // $sql .= " SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master on hardware_details = hw_processor";


                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                var_dump($result);
                    ?>
                    <tr>
                        <td scope="row"><?php echo $row['asset_detail_id'];?></td> 
                        <td><?php echo $row['Ast_category'];?></td>
                        <td><?php echo $row['Applicable'];?></td>
                        <td><?php echo $row['emp_name'];?></td>
                        <td><?php echo $row['device_allocated'];?></td>
                        <!-- <td><?php// echo $ref; ?></td> -->
                        <td><?php echo $row['Ast_belongs'];?></td>
                        <td><?php echo $row['Ast_dvc_code'];?></td>
                        <td><?php echo $row['hw_make'];?></td>
                        <td><?php echo $row['hw_model'];?></td>
                        <td><?php echo $row['hardware_details'];?></td>
                        <td><?php echo $row['device_serial_no'];?></td>
                        <td><?php echo $row['OS'];?></td>
                        <td><?php echo $row['is_item_refundable'];?></td>
                        <td><?php echo $row['Allocated_ipaddress'];?></td>
                        <td><?php echo $row['dvc_recv'];?></td>
                        <td><?php echo $row['dvc_put_to_user']; ?></td>
                        <td><?php echo $row['Ast_location'];?></td>
                        <td>
                            <a href="editSYS.php?id=<?php echo $row['asset_detail_id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                    
                            <a href="assetdelete.php?id=<?php echo $row['id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                        
                    </tr>
                </tbody>
                <?php
                            }
                        }
                    }
                } else{
                        echo "<script>alert('Something Went wrong, Please try later');</script>";
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                ?> 
            </table>
        </div>
    <!-- </div> -->
<!-- </div> -->
<!-- </div> -->














































