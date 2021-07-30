<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
</div>

<br>
<br>
<div class="prepend-2 span-15 append-2" style="background-color:#F8F8F8; border-top:dashed 1px #181818;">
<nbsp></nbsp>
<marquee behaviour="scroll" direction="right">Designed by NetworkTeam-MC</marquee>
<a href="index.php"></a>
</div>


<!-- //footer -->

</div>
<!-- //main -->



<!-- script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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
<!--hide and show select fields  -->
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
<!-- defined fileds -->
<p>Desktops</p>
<p>Servers</p>
<p>Laptops</p>

</body>
</html>