</div>

<br>
<br>
<div class="prepend-2 span-15 append-2" style="background-color:#F8F8F8; border-top:dashed 1px #181818;">
<nbsp></nbsp>
<marquee behaviour="scroll" direction="right" width="100%" bgcolor="#d9ddf">Designed by NetworkTeam-MC</marquee>
<a href="index.php"></a>
</div>


<!-- //footer -->

</div>
<!-- //main -->



<!-- script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/assetsc.js"></script>
<script src="js/login.js"></script>
<script src="js/accval.js"></script>
<script src="js/master.js"></script>
<script src="js/hwvalidation.js"></script>
<script src="js/datavalidation.js"></script>
<script src="js/addemp.js"></script>
<!-- multilevel dropdown -->
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<!-- date picker -->

  </script>

<!-- desktop fields -->
<script>
function emptyValidation() {
var x = document.forms["Desktops"]["AssetCategory"].value;
  if (x == "" || x == null) {
    alert("Category must be filled out");
    return false;
  }

var y = document.forms["Desktops"]["optradio"].value;
  if (y == "" || y == null) {
    alert("item must be filled out");
    return false;
  }
  var z = document.forms["Desktops"]["desktop_serial_no"].value;
  if (z == "" || z == null) {
    alert("desktop serialno must be filled out");
    return false;
  }
}
</script>



<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>

<script>
$(document).ready(function(){
	$(".icon-input-btn").each(function(){
        var btnFont = $(this).find(".btn").css("font-size");
        var btnColor = $(this).find(".btn").css("color");
      	$(this).find(".fa").css({'font-size': btnFont, 'color': btnColor});
	}); 
});
</script>
<!-- <script>
$(document).ready(function(){
  $("#resetform").click(function()
  {
    $("#hardwaremaster")[0].reset();
  });
});
</script> -->


<!--  -->
</body>
</html>