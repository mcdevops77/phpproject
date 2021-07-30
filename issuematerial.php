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

<?php // include 'datatable_links.php'; 
?>

<?php include 'dtlinks.php'; ?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<?php

include 'dbconn.php';
if (isset($_POST['Submit'])) {

    // echo '<pre>';
    // print_r($_POST);
}

?>


<form method="post" name="issue" action="<?= $_SERVER['PHP_SELF']; ?>" id="issue" style="border-radius:15px; border:10px; padding:15px;">
    <div class="asset-tablepan">
        <div class="table-responsive">
            <table class="table border0-table">
                <tbody>
                    <!-- <tr>
                        <td>Category</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" name="AssetCategory" id="AssetCategory">
                                    <option value="">select type</option>
                                    <option value="System">System</option>
                                    <option value="Servers">Server</option>
                                    <option value="Mouse">Mouse</option>
                                    <option value="Pendrive">Pendrive</option>
                                    <option value="Keyboard">Keyboard</option>
                                    <option value="NIC">NIC</option>
                                    <option value="Monitor">Monitor</option>
                                    <option value="Mobiles">Mobiles</option>
                                    <option value="Mobile Tab">TAB</option>
                                    <option value="External HDD">Externadl HDD</option>
                                    <option value="Internal HDD">Internal HDD</option>
                                </select>
                            </div>
                        </td>
                    </tr> -->
                    <tr>
                        <td>Material Issue Date</td>
                        <td>
                            <div class="form-group">
                                <input type="date" name="matissuedt" id="matissuedt" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Name of the Dept</td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="deptname" id="deptname" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Material Purpose</td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="materialpurpose" id="materialpurpose" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Material Description</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="notes" id="notes" placeholder="Enter Description">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Requested Quantity </td>
                        <td>
                            <div>
                                <input type="text" name="reqqunty" id="reqqunty">
                            </div>
                            <td>Issued Quantity</td>
                            <td>
                            
                            </td>
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
                                <input type="text" class="form-control" name="notes" id="notes" placeholder="Enter Description">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="button-centre">
                <input type="submit" name="Submit" id="btnsubmit" value="Submit" align="center" class="btn btn-success">
                <input type="button" name="Reset" value="Reset" id="resetform" class="btn btn-warning">
            </div>
        </div>
    </div>
</form>



<?php include 'footerhw.php'; ?>