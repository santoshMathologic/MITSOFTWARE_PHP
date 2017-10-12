<?php
session_start();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$Proj_title=$_POST['Project_title'];
$Assigned_by=$_POST['Work_Assigned'];
$Work_status=$_POST['Work_Status'];
$Project_type=$_POST['project_Type'];
$Task=$_POST['task'];
$Start_time=$_POST['start_Time'];
$End_time=$_POST['End_Time'];
$Duration=$_POST['duration'];
$Remarks=$_POST['remarks'];



$query = "INSERT INTO entertimesheet(date, project_title, assigned_by, work_status, project_type, task, start_time, end_time, duration, remarks) values ('$date','$Proj_title','$Assigned_by','$Work_status','$Project_type','$Task','$Start_time','$End_time','$Duration','$Remarks')";



if(mysql_query($query))
	{
		header("location:timeshet.php?msg=Created Successfully");
	}
else
	{
		echo "<script language=javascript> alert(\"Not Registered Succesfully\");</script>"; 
	}
	

 
	// header("location:timeshet.php?msg=Created Successfully");
 }
 mysql_close($con);
?>