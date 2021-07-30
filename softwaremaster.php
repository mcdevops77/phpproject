<?php include 'session.php';  ?>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script> -->

<?php // include 'datatable_links.php'; ?>

<?php  include 'dtlinks.php';?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<?php

include 'dbconn.php';
// include 'db_test.php';
if(isset($_POST['Submit'])){


    $swcategory = $_POST['swcategory'];
    $licensename = $_POST['licensename'];
    $serialkey = $_POST['serialkey'];
    $license_validity = $_POST['license_validity'];
    $sw_status = $_POST['sw_status'];
    $description = $_POST['notes'];
    // $sw_id = $_POST['sw_id'];

    // if(empty($sw_id)){

         $query = ("INSERT INTO tbl_software_ast_master (sw_ast_category, sw_ast_licensr_name, sw_ast_license_key, sw_ast_license_validity, sw_ast_status, sw_ast_description) 
                            VALUES('$swcategory',  '$licensename',  '$serialkey', '$license_validity', '$sw_status',  '$description' )");

                if(mysqli_query($conn, $query)){

                        echo "<script> window.alert('You have successfully inserted the Hardware');</script>";
                        echo "<script>document.location = 'index.php'; </script>";
                } else{
                        echo "<script>alert('Something Went wrong, Please try later');</script>";
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
                }
            // }
        
?>




<form method="post" name="softwareasset" action="<?=$_SERVER['PHP_SELF'];?>" id="softwareasset" style="border-radius:15px; border:10px; padding:15px;">
<div class="asset-tablepan">
<div class="table-responsive">
<table class="table border0-table">
    <tbody>
        <tr>
            <td>Category</td>
            <td>
                <div class="form-group">
 
                    <select class="form-control" name="swcategory" id="swcategory">
                        <option value="">Select Category</option>
                        <option value="Operating System">Operating System</option>
                        <option value="Office Suite">Office Suite</option>
                        <option value="Graphics Editor">Graphics Editor</option>
                        <option value="Development Editors">Code & Development Editors</option>
                        <option value="File sharing">file sharing</option>
                        <option value="Networking Tools">Networking Tools</option>
			        </select>   
                </div>
            </td>
        </tr>
        <tr>
            <td>License Name</td>
            <td>
                <div class="form-group">
                    <input type="text" name="licensename" id="licensename" class="form-control"  placeholder="Enter Particular Select Category License Name">
                </div>
            </td>
        </tr>
        <tr>
            <td>License Serial Key</td>
            <td>
                <div class="form-group">
                    <input type="text" name="serialkey" id="serialkey" maxlength="30" class="form-control" placeholder="Enter Product Serial Number">
                </div>
            </td>
        </tr>
        <tr>
            <td>Validity</td>
            <td>
                <div class="form-group">
                    <select name="license_validity" id="license_validity" class="form-control">
                        <option value="">Select license Validity</option>
                        <option value="Freeofcost">Free of cost</option>
                        <option value="limited version"> Limited Version</option>
                        <option value="Unlimited version">Unlimited version </option>
                        <option value="1 year Validity">1 Year Validity</option>
                        <option value="6months validity">6months validity</option>
                        <option value="free 30days Trail">30days Trail</option>
                        <option value="lifelong validity">lifelong validity</option>
                        <option value="opensource">Open Source</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <div class="form-group">
                    <select name="sw_status" id="sw_status" class="form-control">
                        <option value="">Select Software Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Failure">Failure</option>
                        <option value="Requested">Requested</option>
                        <option value="Deployed">Deployed</option>
                        <option value="Archived">Archived</option> 
                        <option value="Successful">Successful</option>                  
                        <option value="Broken">Broken</option>
                        <option value="instock">In stock</option>
                        <option value="newstock">Newly Archived</option>
                        <option value="Outstock">Outstock</option>
                        <option value="scrap">scrap</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Describe</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" name="notes" id="notes"  placeholder="Enter Description">
                </div>
            </td>
        </tr>
    </tbody>
</table>
    <div class="button-centre">
	    <input type="submit" name="Submit" id="btnsubmit"  value="Submit"   class="btn btn-success">
        <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
    </div>
</div>
</div>
</form>




<table id="swdata" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Category</th>
      <th>License Name</th>
      <th>License Serial Key</th>
      <th>License Validity</th>
      <th>Status</th>
      <th>Description</th>
    </tr>
  </thead>
    <tbody>
        <?php

        $sql = "SELECT * FROM tbl_software_ast_master";

        $rs = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) > 0){
            while($row = mysqli_fetch_array($rs)){
                // var_dump($result);
        ?>
        <tr>
            <td scope="row"><?php echo $row['sw_id'];?></td> 
            <td><?php echo $row['sw_ast_category'];?></td>
            <td><?php echo $row['sw_ast_licensr_name'];?></td>
            <td><?php echo $row['sw_ast_license_key'];?></td>
            <td><?php echo $row['sw_ast_license_validity'];?></td>
            <td><?php echo $row['sw_ast_status'];?></td>
            <td><?php echo $row['sw_ast_description'];?></td>
        </tr>
    </tbody>
    <?php

            }
        } else{
            echo "<script>alert('Something Went wrong, Please try later');</script>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</table>









<script>
$(document).ready(function() {
    $('#swdata').DataTable();
} );
</script>




<script type="text/javascript">

$(document).ready(function(){
    $('#btnsubmit').click(function(){
        var swcategory = $('#swcategory');
        if(swcategory.val() == "" || swcategory == null){
            alert("Please select an category");
            return false;
        }
        var licensename = $('#licensename');
        if(licensename.val() == ""){
            alert("Please Enter an License Name");
            return false;
        }
        var serialkey = $('#serialkey');
        if(serialkey.val() == ""){
            alert("Please Enter an License Key");
            return false;
        }
        var license_validity = $('#license_validity');
        if(license_validity.val() == "" || license_validity == null){
            alert("Please Select License validity");
            return false;
        }
        var sw_status = $('#sw_status');
        if(sw_status.val() == ""){
            alert("Please Select Particular Software status");
            return false;
        }

        return true;
    });
});
</script>


<script>
$(document).ready(function(){
$('input[name=serialkey]').keypress(function(){
    var sk = $(this).val().replace(/-/g, '');
        var length = sk.length;
        // alert(length);
        if(length !=0 && length <=30 && length % 5 == ''){
            $(this).val($(this).val()+'-');
        }
    });
});
</script>



<script>
$(document).ready(function(){
  $("#resetform").click(function()
  {
    $("#softwareasset")[0].reset();
  });
});
</script>

<?php include 'footerhw.php'; ?>
