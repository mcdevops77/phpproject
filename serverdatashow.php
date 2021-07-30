<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// include 'header.php';
?>

<div class="table-responsive">

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Application Server Type</th>
                <th>Particular Server Type</th>
                <th>Server Type</th>
                <th>Application Name</th>
                <th>Belongs To</th>
                <th>Device code</th>
                <th>Manufacture</th>
                <th>Model</th>
                <th>Hardware Details</th>
                <th>DeviceSerial No</th>
                <th>Operating System</th>
                <th>Assigned IPAddress</th>
                <th>Assigned Alternative IPAddress</th>
                <th>DB Projects Maintain</th>
                <th>Apache Version</th>
                <th>DB Version</th>
                <th>Project grasp</th>
                <th>Remarks</th>
                <th>Status</th>
                <th>location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
        
    include 'db_test.php';

    $sql = "SELECT * from tbl_application_server_master inner join tbl_asset_details on Allocated_ipaddress = appli_server_ipaddress and device_serial_no = appli_server_serialno
      inner join tbl_hardwaredetails_master_new on hardware_details = hw_model";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
            <tr>

                <td scope="row"><?php echo $row['id'];?></td> 
                <td><?php echo $row['Ast_category'];?></td>
                <td><?php echo $row['appli_server'];?></td>
                <td><?php echo $row['appli_praticular_server'];?></td>
                <td><?php echo $row['server_type'];?></td>
                <td><?php echo $row['appli_server_name'];?></td>
                <!-- <td><?php //echo $row['Applicable'];?></td> -->
                <td><?php echo $row['Ast_belongs'];?></td>
                <td><?php echo $row['Ast_dvc_code'];?></td>
                <td><?php echo $row['hw_manufacture'];?></td>
                <td><?php echo $row['hw_model'];?></td>
                <td><?php echo $row['hw_processor'];?></td>
                <td><?php echo $row['device_serial_no'];?></td>
                <td><?php echo $row['OS'];?></td>
                <!-- <td><?php //echo $row['Allocated_ipaddress'];?></td> -->
                <td><?php echo $row['appli_server_ipaddress'];?></td>
                <td><?php echo $row['appli_server_sec_ipaddress'];?></td>
                <td><?php echo $row['appli_server_project_main_db']; ?></td>
                <td><?php echo $row['appl_server_apache_version']; ?></td>
                <td><?php echo $row['appl_server_db_version']; ?></td>
                <td><?php echo $row['appli_project_handledby']; ?></td>
                <td><?php echo $row['Remarks']; ?></td>
                <td><?php echo $row['server_status'];?></td>
                <td><?php echo $row['Ast_location'];?></td>
                <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                    
                <a href="deleteserver.php?id=<?php echo $row['id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');"><i class="fa fa-trash"></i>Delete</a>
                </td>
                
            </tr>
            <?php
    }
} else{
    echo "<script>alert('Data not found');</script>";
}
mysqli_close($conn);
?>
        </tbody>
</table>
</div>




