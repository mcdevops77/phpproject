<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
    <head>

        <title>MC-AssetManagement</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="/pract/b_test/screen.css" rel="stylesheet" type="text/css">
        <link href="/pract/b_test/menu.css" rel="stylesheet" type="text/css">
        <!-- <meta charset="utf-8"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    </head>
    <style>
        body{margin-top:20px; margin-bottom:20px;background-color:#EEEEEE;}
        a {text-decoration:none;}
    </style>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST")
            $searchfrm = htmlspecialchars($_REQUEST['Submit']);
        if (empty($searchfrm)) {
           echo '<script> alert("please select fields") </script>';
        }
   ?>
 <!--    <?php 
        // if (isset($_REQUEST['Submit'])) {
       //    echo '<script type="text/javascript">';
         //  echo 'alert("please select fields")';
           // echo  '</script>';
        // }      


     ?>  -->   
</head>
<body>

    <div class="container" style="border: 1px solid #999999; margin-bottom:20px;">
        <div class="span-24">
            <img src="web_header.jpg" width="950" height="250">
        </div>
        <br>
        <nbsp></nbsp>
        <nbsp></nbsp>

        <div class="span-24">
            <div class="span-24">
                <div id="underlinemenu">
                    <!--<ul>
                                    <li><a href="/MC-AssetManagement/" title="Home">Home</a></li>
                            </ul>-->
                </div>
            </div>
        </div>
        <div class="span-5 border">
            <!-- <a href="main.php" class="leftnav">Dashboard</a>
            <a href="asset_pg.php" class="leftnav">Assets</a>
            <a href="//" class="leftnav">Category</a>
            <a href="search.php" class="leftnav">Search</a>
            <a href="//" class="leftnav">Tools</a> -->
            <a href="logout.php" class="leftnav">Logout</a>
            <p>&nbsp;</p>
            <p>&nbsp;</p></div>
        <div class="span-19 last">

            <div style="prepend-2 span-13 append-4">
                <p>&nbsp;</p>
                <!--<p align="center" style="font-size:16px;font-weight:bold;">Welcome to Mc-AssetManagement</p>
                -->
                <form method="post" name="searchfrm" action="<?php echo $_SERVER['PHP_SELF'];?>" id="searchfrm" style="border-radius:15px; border:10px; padding:15px;">
                    <p><img src="search.png"/>
                        <strong>Search Form</strong>
                    </p>
                    <hr/>
                    <table width="300" border="1" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="33%">&nbsp;</td>
                            <td width="6%">&nbsp;</td>
                            <td width="61%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Device Code</td>
                            <td>:</td>
                            <td><label>
                                    <input name="Asset device code" id="Asset device code">
                                </label>
                            </td>
                        <tr>
                            <td>Belongs To </td>
                            <td>:</td>
                            <td><label>
                              <!-- <input name="Asset Belongs" id="Asset Belongs"> -->

                                    <select name="type">
                                        <option value="1"></option>
                                        <option value="Eenadu">Eenadu</option>
                                        <option value="MC">MC</option>
                                        <option value="UKML">UKML</option>
                                        <option value="EtvBharat">EtvBharat</option>
                                        <option value="colorama">colorama</option>
                                    </select>
                                </label></td>
                        </tr>
                        <tr>
                            <td>Category </td>
                            <td>:</td>
                            <td><label>

                                    <select name="type">
                                        <option value="1"></option>
                                        <option value="User SystemConfig">User SystemConfig</option>
                                        <option value="Servers">Servers</option>
                                        <option value="Mobile Devices">Mobile Devices</option>
                                        <option value="Others">Others</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>vendor Type </td>
                            <td>:</td>
                            <td><label>
                                    <select name="type">
                                        <option value="1"></option>
                                        <option value="Hp">Hp</option>
                                        <option value="Dell">Dell</option>
                                        <option value="lenovo">lenovo</option>
                                        <option value="HCL">HCL</option>
                                        <option value="I-Ball">I-Ball</option>
                                        <option value="MAC">MAC</option>
                                    </select>
                            </td>
                            </label>
                        </tr>
                        <tr>
                            <td>vendor Model </td>
                            <td>:</td>
                            <td><label>
                                    <!--DEll Models-->
                                    <select name="type">
                                        <option value="1"></option>
                                        <option value="Dell -> 7040">Dell -> 7040</option>
                                        <option value="Dell -> 3040">Dell -> 3040</option>
                                        <option value="Dell->7070">Dell->7070</option>
                                        <option value="Dell -> 3020">Dell -> 3020</option>
                                        <!--HCL MOdel-->

                                        <option value="Core 2 Duo">Core 2 Duo</option>
                                        <!--peripharels-->
                                        <option value="7">peripharels</option>
                                        <!--Mobile devices-->
                                        <option value="8">lenovo TaB</option>
                                        <option value="9">Samsung tab</option>
                                    </select>
                            </td>
                            </label>
                        </td>
                        <tr>
                            <td> Register UserName</td>
                            <td>:</td>
                            <td>
                                <label>
                                    <input name="Ast_reg_user" id="Ast_reg_user">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Register IPaddress</td>
                            <td>:</td>
                            <td>
                                <label>
                                <input name="Ast_reg_user_ipaddress">
                            </label>
                            </td>
                        </tr>

                        <td>&nbsp;</td>
                        <td>&nbsp;</td>

<!-- <td>&nbsp;</td>
<td>&nbsp;</td> -->
                        <td>
                            <br>
                            <input type="submit" name="Submit" value=" Search Now"  align="center" class="button">
                    </table>
                </form>

        <!-- <p>&nbsp;</p> -->
                <p>&nbsp;</p>
        <!-- <pre></pre> -->
                <div class="span-18">
                </div>
                <?php
                include_once 'db_test.php';
                ?>
                <?php
                if (!isset($_session)) {
                    // session_start();
                } else {
                    header("Location:new_index.php");
                }

//header("Location:new_index.php") 
// require_once("db_test.php")
                // echo "page is running";
                //if(isset($_POST['submit'])) {
                ?>
                <div class="span-18"></div>
                <div class="container"></div>       
                <?php 
                 if (isset($_REQUEST['Submit'])) {?>
                <table class="table table-dark" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Asset device code</th>
                            <th scope="col">Asset Belongs To </th>
                            <th scope="col">Asset Category </th>
                            <th scope="col">Category Type </th>
                            <th scope="col">Category Model </th>
                            <th scope="col">Asset allocated </th>
                            <th scope="col">Asset RecivedOn </th>
                            <th scope="col">Asset location </th>
                    </thead>
                    </thead>
                    <tbody> <?php
                        include_once 'db_test.php';
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                       
                            $sql = " select * from  search ";
                    $result = mysqli_query($conn, $sql);
                    mysqli_close($conn);
//                    var_dump($result);
                  
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_array($result)) {
  // echo "<pre>";
  //                       print_r($row);
  //                       echo "</pre>";
                                    ?>
                        
                                    <tr>
                                        <!--<td><?php // $row->Ast_dvc_code ?></td>--> 
                                        <!-- <td><?php // echo $row['id']   ?></td>  -->
                                        <td><?php echo $row['Ast_dvc_code']   ?></td> 
                                        <td><?php echo $row['Ast_belongs']   ?></td> 
                                        <td><?php echo $row['Ast_category'];   ?></td>
                                        <td><?php echo $row['cat_vendor_type'];   ?></td>
                                        <td><?php echo $row['cat_vendor_model'];   ?></td>
                                        <td><?php echo $row['Ast_reg_user']  ?></td>
                                        <td><?php echo $row['Ast_dvc_recv']   ?></td>
                                        <td><?php echo $row['Ast_location']   ?></td><?php
//			 echo "Ast_dvc_code " . $row["Ast_dvc_code"]. "Ast_belongs " . $row["Ast_belongs"]. " Ast_category " . $row["Ast_category"]. " cat_vendor_type "  . $row["cat_vendor_type"]. " cat_vendor_model " . $row["cat_vendor_model"]. " Ast_reg_user " . $row["Ast_reg_user"]. " Ast_dvc_recv " . $row["Ast_dvc_recv"]. " Ast_location " . $row["Ast_location"]. "<br>";
                                        ?> </tr>
                                    <?php
                                }
                            } else {
                                echo "0 results";
                            }
                        }
                        ?>
                   </tbody>
                </table>
            </div>
            <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    responsive: true
                } );
            } );
</script>

<div>
    <?php include_once 'footer.php'; ?>
</div>
            </body>
            </html>
