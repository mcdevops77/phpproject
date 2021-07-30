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
                <th>Server Type</th>
                <th>Application Name</th>
                <th>Category</th>
                <th>Belongs To</th>
                <th>Device code</th>
                <th>Make Type</th>
                <th>Model</th>
                <th>Hardware Details</th>
                <th>DeviceSerial No</th>
                <th>Operating System</th>
                <th>Assigned IPAddress</th>
                <th>Assigned Alternative IPAddress</th>
                <th>DB Projects Maintain</th>
                <th>Project grasp</th>
                <th>Remarks</th>
                <th>location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
        
    include 'db_test.php';

    // $sql = "select * from tbl_application_server_master inner join tbl_assets_td_new on Asset_device_code = Ast_dvc_code";
    $sql = "select * from tbl_application_server_master inner join tbl_assets_td_new on make_type = appli_server_make";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
            <tr>

                <td scope="row"><?php echo $row['id'];?></td> 
                <td><?php echo $row['appli_server'];?></td>
                <td><?php echo $row['appli_server_name'];?></td>
                <td><?php echo $row['Ast_category'];?></td>
                <!-- <td><?php //echo $row['Applicable'];?></td> -->
                <!-- <td><?php// echo $ref; ?></td> -->
                <td><?php echo $row['Ast_belongs'];?></td>
                <td><?php echo $row['Asset_device_code'];?></td>
                <td><?php echo $row['make_type'];?></td>
                <td><?php echo $row['model'];?></td>
                <td><?php echo $row['hardware_details'];?></td>
                <td><?php echo $row['device_serial_no'];?></td>
                <td><?php echo $row['OS'];?></td>
                <td><?php echo $row['Allocated_ipaddress'];?></td>
                <td><?php echo $row['appli_server_sec_ipaddress'];?></td>
                <td><?php echo $row['appli_server_project_main_db']; ?></td>
                <td><?php echo $row['appli_project_handledby']; ?></td>
                <td><?php echo $row['Remarks']; ?></td>
                <td><?php echo $row['Ast_location'];?></td>
                <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                </td>
            </tr>
        </tbody>
            <?php
    }
} else{
    echo "no result";
}
mysqli_close($conn);
?>
</table>
</div>




