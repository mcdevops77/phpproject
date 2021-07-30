<?php include 'session.php';  ?>


<?php include 'dtlinks.php'; ?>


<?php

include 'dbconn.php';

if (isset($_POST['Submit'])) {

    // echo '<pre>';
    // print_r($_POST);
    $emplyid = $_POST['emplyid'];
    $emplyname = $_POST['emplyname'];

    $stmt = ("INSERT INTO tbl_employee_master (emp_code, emp_name) VALUES('$emplyid', '$emplyname')");

    // var_dump($stmt);
    // print_r($stmt);
    // exit;
    if (mysqli_query($conn, $stmt)) {

        echo "<script> window.alert('You have successfully Added new Employee Details');</script>";
        echo "<script>document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Something Went wrong, Please try later');</script>";
        echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
    }
}


?>





<form method="post" name="empadd" action="<?= $_SERVER['PHP_SELF']; ?>" id="empadd" onsubmit="return validate_form();"  style="border-radius:15px; border:10px; padding:15px;">
    <div class="asset-tablepan">
        <div class="table-responsive">
            <table class="table border0-table">
                <tbody>
                    <tr>
                        <td>Employee ID</td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="emplyid" id="emplyid" class="form-control" maxlength="7" onkeypress="return isNumberKey(event)" placeholder="Enter Employee ID">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="emplyname" id="emplyname" class="form-control" placeholder="Enter Employee Name">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="button-centre">
                <input type="submit" name="Submit" id="btnsubmit" value="Submit" class="btn btn-success">
                <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
            </div>
        </div>
    </div>
</form>






<script type="text/javascript">
    function validate_form() {
        if (document.empadd.emplyid.value == "") {
            alert("Please Enter Employee ID");
            return false;
        }
        if (document.empadd.emplyname.value == "") {
            alert("Enter Employee Name");
            return false;
        }
        alert("sucessfully Submitted");

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 8 && charCode > 10 &&
            (charCode < 8 || charCode > 10)) {
            alert("Enter Number");
            return false;
        }
        return true;
    }
}

</script>


<script>
$(document).ready(function(){
  $("#resetform").click(function()
  {
    $("#empadd")[0].reset();
  });
});
</script>


<?php include 'footerhw.php'; ?>







