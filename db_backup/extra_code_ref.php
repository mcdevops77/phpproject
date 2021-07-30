<div id="checking" style="display:none;position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: #f4f4f4;z-index: 99;">

                                                       <div class="text" style="position: absolute;top: 45%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">

                                                           <center><img src="<?php echo base_url(); ?>assets/images/Preloader_3.gif" alt="Loading"></center>

                                                           Generating OS Table Please Wait! <Br>Meanwhile Please <b style="color: red;">BE COOL...</b>
                                                       </div>
                                                   </div>











                                                    $('#day_close_submit').submit(function () {
               $('#gif').css('visibility', 'visible');
           });


           <!-- <script>

$('#display').click(function(){
    if($('#datatable').is(':visible')) {
        $('#datatable').hide()
    } else{
        $('#datatable').show()
    }

});
</script> -->







<!-- <script src="js/jquery-test.js"></script>

<script>
$(function(){
    $('#display').click(function(){
        $('#datatable').hide("slow",function(){
            alert("data hidden!!");
        });
    });

    $('#display').click(function(){
        $('#datatable').show();
        alert("data displayed!!");
    });
});
</script> -->




<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<!-- <script>

function popup(){
    swal("Are you sure you want to Display the Records?", {
  buttons: ["Cancel!", "Yes!"],
});
    
}
</script> -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>


<!-- 
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css"> -->



<!-- <script>

$('#display').click(function(){
    if($('#datatable').is(':hidden')) {
        $('#datatable').show()
    } else{
        $('#datatable').hide()
    }

});


</script> -->



<!-- individual for seect & txt box -->

<!-- <script>
$(function(){
  $("input[type='radio']").click(function(){
    if($(this).val() == "1"){
      $("#emp_code").show();
    } else{
      $("#emp_code").hide();
    }
  });
});
</script> 
 <script>
$(function(){
  $("input[type='radio']").click(function(){
    if($(this).val() == "0"){
      $("#dvc_alloted").show();
    } else{
      $("#dvc_alloted").hide();
    }
  });
});
</script> -->


 <script>

$(function(){
	$('#Assetdevicecode').hide();
	$('#Assetbelongs').change(function(){
    // code();
    // alert($(this).val());
    if($(this).val() == 'Eenadu') {
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
		}
	});
}); 
function code(){
    alert($('#Assetbelongs').val());
    if($('#Assetbelongs').val() == 'Eenadu') {
      $('#Assetdevicecode').show();
     	} else{
      $('#Assetdevicecode').hide();
      $("input:text").removeAttr("checked");
		}
}
</script> 


<script src="tjs/jquery-2.1.4.min.js"></script> 
<script src="tjs/bootstrap.min.js"></script> 
<script src="tjs/jquery.dataTables.min.js"></script>
<script src="tjs/dataTables.buttons.min.js"></script>
<script src="tjs/buttons.flash.min.js"></script>
<script src="tjs/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="tjs/buttons.html5.min.js"></script>
<script src="tjs/buttons.print.min.js"></script>





