<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            
            <th>id</th>
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

include_once 'db_test.php';

// $ast_id = $_GET['id'];
$sql = "SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master on hardware_details = hw_processor 
            inner join  tbl_employee_masters on emp_code = device_allocated";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($row['Applicable']==1){
            $ref = 'User Pc';
        } else{
            $ref = 'Server';
        }
        ?>
        <tr>
                <td scope="row"><?php echo $row['asset_detail_id'];?></td>
                <td><?php echo $row['emp_code'];?></td>
                <td><?php echo $row['emp_name'];?></td>
                <td><?php echo $row['Ast_category'];?></td>
                <!-- <td><?php //echo $row['Applicable'];?></td> -->
                <td><?php echo $ref; ?></td>
                <td><?php echo $row['Ast_belongs'];?></td>
                <td><?php echo $row['Ast_dvc_code'];?></td>
                <td><?php echo $row['make_type'];?></td>
                <td><?php echo $row['model'];?></td>
                <td><?php echo $row['hardware_details'];?></td>
                <td><?php echo $row['device_serial_no'];?></td>
                <td><?php echo $row['OS'];?></td>
                <td><?php echo $row['device_allocated'];?></td>
                <td><?php echo $row['is_item_refundable'];?></td>
                <td><?php echo $row['Allocated_ipaddress'];?></td>
                <td><?php echo $row['dvc_recv'];?></td>
                <td><?php echo $row['dvc_put_to_user'];?></td>
                <td><?php echo $row['Ast_location'];?></td>
                <td>
                <a href=".php?id=<?php echo $row['id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                <a href=".php?id=<?php echo $row['id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');"><i class="fa fa-trash"></i>Delete</a>
                    
                </td>
            </tr>
            <?php
    }

} else{
        echo "<script>alert('Something Went wrong, Please try later');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// mysqli_close($conn);

// $res = mysqli_fetch_row($result);
// // var_dump($res);
// echo "<pre>"; print_r($res);

?>
    </tbody>
</table>
</div>
