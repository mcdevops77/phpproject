<?php 

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'db_test.php';
if(!isset($_session)) 
{
	session_start();
} else {
	header("Location:index.php");
}

$sql = "select * from tbl_assets";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>MC-AssetManagement</title>
</head>
<body>
<div class="span-19 last">
    <button><a href="index.php">Back to Home Page </a></button>
	<div style="prepend-2 span-13 append-4">
		<table width="300" border="1" cellpadding="0" cellspacing="0">
		<!--  <tr>
		 	<td width="33%">&nbsp;</td>
		 	<td width="6%">&nbsp;</td>
		 	<td width="61%">&nbsp;</td>
         </tr> -->
         <thead>
                        <tr>
                            <th scope="col">Asset Belongs To	</th>
                            <th scope="col">Asset Category </th>
                            <th scope="col">Asset device code </th>
                            <th scope="col">Asset model </th>
                            <th scope="col"> Asset Hardware Details	</th>
                            <th scope="col">Asset device serialno </th>
                            <th scope="col">Asset Decive Allocated </th>
                            <th scope="col"> Asset Register user	</th>
                            <th scope="col">Asset RegUser_ipaddress </th>
                            <th scope="col">Asset Device Recivied </th> 
                            <th scope="col"> Asset location</th>  
                         </tr>
                     </thead>
                     <tbody>
                     <?php 

                     if (mysqli_num_rows($result) > 0) {

                        while($row = mysqli_fetch_array($result)) {

                      ?>

                      <tr> 
                        <td><?php echo $row['Ast_belongs']   ?></td> 
                        <td><?php echo $row['Ast_category'];   ?></td>
                        <td><?php echo $row['Ast_dvc_code'];   ?></td>
                        <td><?php echo $row['Ast_model'];   ?></td>
                        <td><?php echo $row['Ast_hw_details']  ?></td>
                        <td><?php echo $row['Ast_dvc_serialno']   ?></td>
                        <td><?php echo $row['Ast_dvc_alloted']   ?></td>
                        <td><?php echo $row['Ast_reg_user']   ?></td>
                        <td><?php echo $row['Ast_reg_user_ipaddress']   ?></td>
                        <td><?php echo $row['Ast_dvc_recv']   ?></td>
                        <td><?php echo $row['Ast_location']   ?></td>
                        <!-- <td class="table-row" colspan="2"><a href=""></a></td> -->
                    </tr>
                    <?php 

                        }

                    }
                 ?>
             </tbody>
         </table>
     </div>
 </div>
</body>
</html>

