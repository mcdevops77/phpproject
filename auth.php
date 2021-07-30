<?php
$authenticate = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
 $name = $_SERVER['PHP_AUTH_USER'];
 $pass = $_SERVER['PHP_AUTH_PW'];
 if ($name == '1234' && $pass == '1234')
 {
  $authenticate = true;
  header("Location: search.php");
 }
}
 
if ($authenticate==false)
{
 header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
 header('HTTP/1.0 401 Unauthorized');
 echo "Authentication Failed Refresh To Do It Again";
} 

else
{
 ?>

 <?php
}
?>