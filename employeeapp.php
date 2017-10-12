<?php

include ("includes/db_con.php");
$errors = "";
if(isset($_POST['submit']))
{
	session_start();
	$code = $_POST['code'];
	$first_name = $_POST['first_name'];
	$passwrd = $_POST['Emp_pass'];
	$query="SELECT * FROM member_details where code='$code' AND password='$passwrd'";
  	$result=mysqli_query($query);
  	mysqli_error();
  	if(mysqli_num_rows($result)>0)
  	{	$row = mysqli_fetch_assoc($result);
		$_SESSION["AdminId"] = $row["code"];
		$ECode = $_SESSION["AdminId"];
  		header("location:timeshet.php?code=$ECode");
		die();	
	}
  	else
  	{$errors = "Invalid username/password ";
	}
}
if(isset($_POST['cancel']))
{
	header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/Empstyleadmin.css"/>
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
<title>Admin Login</title>
<style>
.error
{
	color:#F00;
	font-size:18px;
	font-family:"Times New Roman", Times, serif;
	margin-left:50px;
}
</style>

<script>
function var_admin()
{
var user_mail = document.getElementById('code').value;
		
		if(user_mail == '') {
			alert('Enter the Username');
			document.getElementById('code').focus();
			return false;
		}
		var password = document.getElementById('first_name').value;
		
		if(password == '') {
			alert('Enter the Password');
			document.getElementById('first_name').focus();
			return false;
		}
}
</script>


<style>
.background
{
background-color:#313131;
}
</style>


</head>
<body  class="background">
 
  <form name="form_Login" id="form_login" action="" onSubmit="return var_admin()" method="post">
<div id="page">
<div style="width:30px;float:left;margin-left:10px;">
           <div style="margin-top:0px; margin-left:670px;">
<embed src=http://flash-clocks.com/free-flash-clocks-blog-topics/free-flash-clock-121.swf width=200 height=100 wmode=transparent type=application/x-shockwave-flash></embed>
        </div>

<div id="mid" style="margin:0px;">
  <div id="log">
  	<div style="margin-left:30px;width:349px;"><img src="images/Main_logo.png"/></div>
  <h3>Employee Login</h3>
  </div>
   <?php
          
		  if($errors != "") {
		  
		  	echo '<p class="error">'. $errors .'</p>';
		}
		  
		  ?>  
         
          <div style="width:150px;float:left;margin-left:40px;">
          <a href="index.php" style="text-decoration:none;color:#999">Admin</a> <br/><br/>
          <a href="employeeapp.php" style="text-decoration:none;color:#999">Employee</a><br/><br/>
          <a href="timeapp.php" style="text-decoration:none;color:#999">Timesheet Approval</a> 
          </div>
         
     <div style="width:300px;float:right;;margin-right:100px;margin-top:20px;">     
  
    <div id="txtdiv">
 <input type="text" name="code" id="code" class="txt" autocomplete=off placeholder="Employee Id">  
    </div>

    <div id="txtdiv">
       <input type="password" name="Emp_pass" id="first_name" class="txtpass" autocomplete=off placeholder="Password">  
    </div>

  <div style="clear:both"></div>
  <div id="fot">
   
   
<button type="submit" value="Login" name="submit" style="width:118px;height:35px;margin-top:17px; margin-right:10px">
<img src="images/Button_Gradiant/00080.png" name="submit" style="margin-top:-3px; margin-left:-5px; border-radius:3px; border:0px solid  rgb(0,0,0)"/>
</button> 
    <div style="clear:both"></div>
   
   
   
<!--    <input type="image" value="Login" src="images/buttons/1.png" name="submit" style="margin-top:7px; margin-left:182px; border-radius:3px; border:1px solid  rgb(0,0,0)"> -->
  	<!---<input type="submit" value="Login" name="submit" class="butt"> -->
  </div>
   <div style="clear:both"></div><br/><br/>
   <!-- <div id="fot">
  	<input type="button" value="Employee Register" name="sub" class="butt" onClick="window.location='regiemployee.php'">
  </div>-->
   <div style="clear:both"></div>
</div>
</div>
</div>
</form>
</body>
</html>
