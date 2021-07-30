
 var loading = $('#loading').hide();
               //Attach the event handler to any element
               $(document)
                       .ajaxStart(function () {
                           //ajax request went so show the loading image
                           loading.show();
                       })
                       .ajaxStop(function () {
                           //got response so hide the loading image
                           loading.hide();
                       });
           });//group end
<div class="loading" id="loading">
                                               <img src="<?php echo base_url(); ?>assets/images/Preloader.gif"  width="120px" height="100px"  />  
                                           </div>


                                           
                        // if($conn->multi_query($sql)){
                        //     do{
                        //         if($result = $conn->store_result()){
                        //             while($row = $result->fetch_row()){
                        //                 printf("%s\n", $row[0]);
                        //             }
                        //             $result->free_result();
                        //         }
                        //         if($conn->more_results()){
                        //             printf("------------\n");
                        //         }
                        //     }
                        //     while($conn->next_result()); 
                        




<!-- <div class="container">
	<div class="row">
        <div class="col-md-12">

        </div>
    </div>

<div class="row">
		<div class="col-md-12"> -->


        <?php 

                    $sql2 = " SELECT  * from tbl_asset_details inner join tbl_hardwaredetails_master on hardware_details = hw_processor where Ast_category = 'Servers'";
                    $res = mysqli_query($conn, $sql2);
                        if(mysqli_num_rows($res) > 0){
                            while($rw = mysqli_fetch_assoc($res)){
                                var_dump($res);

                    ?>
                    <tr>
                        <td scope="row"><?php echo $rw['asset_detail_id'];?></td> 
                        <td><?php echo $rw['Ast_category'];?></td>
                        <td><?php echo $rw['Applicable'];?></td>
                        <td><?php echo $rw['device_allocated'];?></td>
                        <!-- <td><?php// echo $ref; ?></td> -->
                        <td><?php echo $rw['Ast_belongs'];?></td>
                        <td><?php echo $rw['Ast_dvc_code'];?></td>
                        <td><?php echo $rw['hw_make'];?></td>
                        <td><?php echo $rw['hw_model'];?></td>
                        <td><?php echo $rw['hw_ram'];?></td>
                        <td><?php echo $rw['hw_Hdd'];?></td>
                        <td><?php echo $rw['hardware_details'];?></td>
                        <td><?php echo $rw['device_serial_no'];?></td>
                        <td><?php echo $rw['OS'];?></td>
                        <td><?php echo $rw['is_item_refundable'];?></td>
                        <td><?php echo $rw['Allocated_ipaddress'];?></td>
                        <td><?php echo $rw['dvc_recv'];?></td>
                        <td><?php echo $rw['dvc_put_to_user']; ?></td>
                        <td><?php echo $rw['Ast_location'];?></td>
                        <td>
                        <a href="editSYS.php?id=<?php echo $row['asset_detail_id']; ?>"onclick="javascript:return confirm('Do you want Edit this record?');"><i class="fa fa-pencil"></i>Edit</a>
                    
                        <a href="deletesystrans.php?id=<?php echo $row['asset_detail_id']; ?>" onclick="javascript:return confirm('Do you want delete this record?');"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>

                    <?php
                            }
                        }else{
                            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                        }
                ?>