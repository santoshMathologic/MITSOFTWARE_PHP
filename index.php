
<?php
include("includes/db_con.php");
phpinfo();
 
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
<title>Page Title</title>

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


</head>
<body>
<div class="container">
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">

    <div style="margin-left:30px;width:349px;"><img src="images/Main_logo.png"></div>
    
        
        
        <div class="panel panel-default">
      <div class="panel-heading">Sign In</div>
      <div class="panel-body">
      <form class="form-signin">
            <input type="text" class="form-control" placeholder="Email" id="user_mail" name="user_mail"  required autofocus>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign in
                
                </button>
            <label class="checkbox pull-left" style="margin-left: 20px;">
                <input type="checkbox" value="remember-me">
                Remember me
            </label>
            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
            </form>
      
      
      
      
      </div>
    </div>
           


          
        
        <a href="#" class="text-center new-account">Create an account </a>
    </div>
</div>
</div>

<div style="margin-top: -226px;">
           <a href="index.php" >Admin</a> <br/><br/>
          <a href="employeeapp.php">Employee</a><br/><br/>
          <a href="timeapp.php">Timesheet Approval</a> 
          </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>



