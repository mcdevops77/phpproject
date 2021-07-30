<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<br>
<br>
<div class="prepend-2 span-15 append-2" style="background-color:#F8F8F8; border-top:dashed 1px #181818;">
<nbsp></nbsp>
<marquee behaviour="scroll" direction="right">Designed by NetworkTeam-MC</marquee>
<a href="index.php"></a>
</div>
