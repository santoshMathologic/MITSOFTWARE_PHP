<?php
error_reporting(E_ERROR | E_PARSE);
//phpinfo();
session_start();
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'root';
		$dbname = 'mitsoftware';
     	$conn	= mysqli_connect($dbhost,$dbuser,$dbpass);
		
		 mysqli_select_db($con,$dbname); 
         session_start();
		if(! $conn ) {
		   die('Could not connect: ' . mysql_error());
		}
		
		echo 'Connected successfully';
		mysqli_close($conn);
function checkAdminSession()
{	if(isset($_SESSION["AdminId"])&&trim($_SESSION["AdminId"])!= "")
	{return true;
	}		
	header("Location:index.php");
}
?>