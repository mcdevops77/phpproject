<?php

include 'db_test.php';
if(isset($_POST['Submit'])){
    

    $empid = $_POST['emp_code'];
    $empname = $_POST['emp_name'];
    

   echo $stmt = ("INSERT INTO tbl_employee_master (emp_code, emp_name) VALUES('$empid',  '$empname')");

    if(mysqli_query($conn, $stmt)){

        // echo "<script>alert('You have successfully Added Employee's Data');</script>";
        // echo "<script>alert('You have successfully inserted the data');</script>";
        // echo "<script>window.alert('You have successfully Added Employee's Data');</script>";
        echo"<script>alert('You have successfully Added Employee's Data');</script>";
        echo "<script>document.location = 'index.php'; </script>";
    } else{
        echo "<script>alert('Something Went wrong, Please try later');</script>";
        echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>