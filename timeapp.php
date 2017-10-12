<?php
include("includes/db_con.php");
//checkAdminSession();
$errors = "";

if(isset($_POST['submit']))
{
	$user_mail = $_POST['user_mail'];
	$password = $_POST['password'];
	$query="SELECT *FROM user_login where user_mail='$user_mail' AND password='$password'";
  	$result=mysql_query($query);
  	mysql_error();
  	if(mysql_num_rows($result)>0)
  	{
		$row = mysql_fetch_array($result);
		$_SESSION["AdminId"] = $row["user_mail"];
		$_SESSION['user_type_fk'] = $row['user_type_fk'];
		if($_SESSION['user_type_fk']==2)
        {
        header("location:viewtimesheet.php");
         }
		if($_SESSION['user_type_fk']==1)
		{
		header("location:timeapp.php");
		}
		
		
		die();
	}
  	else
  	{
  		/*$_SESSION['msg'] ="Invalid username/password";
  		header("location:index.php");*/
		$errors = "Invalid username/password";
		
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

<link rel="stylesheet" type="text/css" href="css/Timestyleadmin.css"/>
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />

<title>Admin Login</title>
<style>
.error
{
	color:#F00;
	font-size:18px;
	margin-left:50px;
}
</style>

<script>
function var_admin()
{
var user_mail = document.getElementById('user_mail').value;
		
		if(user_mail == '') {
			alert('Enter the Username');
			document.getElementById('user_mail').focus();
			return false;
		}
		var password = document.getElementById('password').value;
		
		if(password == '') {
			alert('Enter the Password');
			document.getElementById('password').focus();
			return false;
		}
}
</script>
<style>
.background
{
/*background-image:url(images/BackGround.png);
background-repeat:inherit; */
background-color:#313131;
}
</style>

</head>
<body class="background">
 
  <form name="form_Login" id="form_login" action="" onSubmit="return var_admin()" method="post">
<div id="page">
<div style="width:30px;float:left;margin-left:10px;">
           <div style="margin-top:0px; margin-left:670px;">
<embed src=http://flash-clocks.com/free-flash-clocks-blog-topics/free-flash-clock-121.swf width=200 height=100 wmode=transparent type=application/x-shockwave-flash></embed>
        </div>

<div id="mid" style="margin:0px">
  <div id="log">
  	<div style="margin-left:30px;width:349px;"><img src="images/Main_logo.png"/></div>
  <h3>Timesheet Login</h3>
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
       <input type="text" name="user_mail" id="user_mail" class="txt" autocomplete=off placeholder="UserName">  
  
  </div>
    <div id="txtdiv">
       <input type="password" name="password" id="password" class="txtpass" autocomplete=off placeholder="Password">  
    </div>
  
  <div style="clear:both"></div>
  <div id="fot">
      <button type="submit" value="Login" name="submit" style="width:118px;height:35px;margin-top:17px; margin-right:10px">
<img src="images/Button_Gradiant/00080.png" name="submit" style="margin-top:-3px; margin-left:-5px; border-radius:3px; border:0px solid  rgb(0,0,0)"/>
</button> 
 <!--- <input type="submit" value="Login" name="submit" class="butt"> --->
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
