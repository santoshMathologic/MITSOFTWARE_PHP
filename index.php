<?php
include("includes/db_con.php");
$errors = "";
if(isset($_POST['submit']))
{
	$user_mail = $_POST['user_mail'];
	$password = $_POST['password'];
	$query="SELECT *FROM user_login where user_mail='$user_mail' AND password='$password'";
  	$result=mysqli_query($query);
  	mysqli_error();
  	if(mysqli_num_rows($result)>0)
  	{
		$row = mysqli_fetch_array($result);
		$_SESSION["AdminId"] = $row["user_mail"];
		$_SESSION['user_type_fk'] = $row['user_type_fk'];
		
		if($_SESSION['user_type_fk']==1)
        {
        header("location:home.php");
        }
		if($_SESSION['user_type_fk']==2)
		{
		header("location:index.php");
		}
		if($_SESSION['user_type_fk']==3)
		{
		header("location:index.php");
		}
		
		
		die();
	}
  	else
  	{	$errors = "Invalid username/password";
		
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/styleadmin.css"/>
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
/*background-image:url(images/Back.png); */
/*background-repeat:no-repeat; */

background-color:#313131;

}
</style>




</head>

<body id="Gradiant_body" class="background">
 
  <form name="form_Login" id="form_login" action="" onSubmit="return var_admin()" method="post">
<div id="page">
<div style="width:30px;float:left;margin-left:10px;">
          
          
           <div style="margin-top:0px; margin-left:670px;">
<embed src=http://flash-clocks.com/free-flash-clocks-blog-topics/free-flash-clock-121.swf width=200 height=100 wmode=transparent type=application/x-shockwave-flash></embed>
        </div>
          
          
          
          </div>
          

<div id="mid" style="margin:0px;">
  <div id="log">
  	<div style="margin-left:30px;width:349px;"><img src="images/Main_logo.png"/></div>

 
  <h3>Admin Login</h3>
  </div>
   <?php
          
		  if($errors != "")
		   {echo '<p class="error">'. $errors .'</p>';
		   }
		  
		  ?> 
          
          
       
          
           
         <div style="width:150px;float:left;margin-left:40px;">
           <a href="index.php" style="font-family:'Times New Roman', Times, serif; text-decoration:none;color:#999">Admin</a> <br/><br/>
          <a href="employeeapp.php" style="text-decoration:none;font-family:'Times New Roman', Times, serif;color:#999">Employee</a><br/><br/>
          <a href="timeapp.php" style="text-decoration:none;font-family:'Times New Roman', Times, serif;color:#999">Timesheet Approval</a> 
          </div>
         
    
      <div style="width:300px;float:right;;margin-right:100px;margin-top:20px;">          
 
    <div id="txtdiv">
       <input type="text" name="user_mail" id="user_mail" class="txt" autocomplete="off" placeholder="UserName" class="txtBox">  
    </div>
 
 
    <div id="txtdiv">
       <input type="password" name="password" id="password" class="txtpass" autocomplete=off placeholder="Password">  
    </div>


<button type="submit" value="Login" name="submit" style="width:118px;height:35px;margin-top:17px; margin-right:0px; margin-left:172px">
<img src="images/Button_Gradiant/00080.png" name="submit" style="margin-top:-3px; margin-left:-5px; border-radius:3px; border:0px solid  rgb(0,0,0)"/>
</button> 
    <div style="clear:both"></div>



    <div style="clear:both"></div>

   
</div>
</div>
</div>
</form>
</body>
</html>
