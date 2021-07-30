<?php 

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:index.php");
    exit;
}

include 'newheader.php';
?>


<h1 style="font-size:16px;font-weight:bold;text-align:center;">MC-Assets Maintenance</h1>
<form method="post" name="frmLogin" id="frmLogin" action="log_chk.php"> 
	<div class="asset-tablepan">
<table class="table border0-table" >
    <tbody>
	<h2 style="font-size:20px;text-align:center">Login</h2>

    <tr>
		<td>
		<div class="form-group" style="text-align:center">
<img src="logo_login1.png" />
</div>
</td>
	</tr>

	<tr>
	<td>
		 <div class="form-group" style="text-align:center">
		 <label for="User Name">User Name :</label>
		 <input name="UserName" type="text" id="UserName" size="13" maxlength="15" placeholder="Enter Username">
		 </div>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 <div class="form-group" style="text-align:center">
		 <label for="Password">Password :</label>
		 <input name="Password" type="password" id="Password" size="13" placeholder="●●●●●●●●●●●●●●" width="100">
		 </div>
		 </td>
		 </tr>
         
</tbody>
</table>
<div class="form-group" style="text-align:center">
		 <input type="checkbox" name="remember" id="remember"> <small>  Remember Me  </small>
    </div>

<div class="button-centre">
		 <!-- <input  name="btnLogin" type="submit" id="btnLogin" value="Login" class="btn btn-outline-success" onclick="return loginvalidation()" required> -->
		 <button type="submit" class="btn btn-outline-success" name="login_button" id="login_button" size="13" onclick="return loginvalidation()" required >
		 <span class="glyphicon glyphicon-log-in"></span> &nbsp; Login
		 </button> 
	</div>
	
</div>

</form>

<?php include 'footer.php';?>

