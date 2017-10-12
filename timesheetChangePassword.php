<?php
include("includes/db_con.php");
//checkAdminSession();
if(isset($_POST['submit']))
 { 	
 	session_start();
	$Code=$_POST['ECode'];
    $CurrentPass=$_POST['oldPassword'];
 	$newPass= $_POST['NewPass'];
 	$ConfirmPasswrd=$_POST['confirmPass'];

          if($newPass!=$ConfirmPasswrd)
		  {
		  header("location:TimeSheetChangePass.php?msg=Password Not Matched");
		  }
		  else
		  {
     			$_SESSION['code'] = $Code;
			 	$ECode= $_SESSION['code'];
		    	$Qry = "SELECT password from member_details where code='$ECode'";
				$result = mysql_query($Qry) or die(mysql_error());
				$row = mysql_fetch_array($result);
				$query = "UPDATE member_details SET password='$newPass' WHERE password='$CurrentPass' AND code='$ECode'";  
				if(mysql_query($query))
						{     header("location:TimeSheetChangePass.php?msg=Password has been Changed");
						}
					else
						{
							 header("location:TimeSheetChangePass.php?msg=Password not been Changed ");
						}
				}
		}



?>

