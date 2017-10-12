<?php
include "includes/db_con.php";

if(isset($_POST['sub']))
{

$id =$_REQUEST['id'];
//$id = $_GET['id'];
$Emp_id=$_POST['emp_id'];
$Emp_name=$_POST['emp_name'];
$Emp_salary=$_POST['salary'];
$Emp_designation=$_POST['designation'];

/*
$id = $_GET['id'];
$queryRes = mysql_query("select *from salary");
$res = mysql_query($queryRes);
$row = mysql_fetch_array($res);
$Emp_id =  $row['emp_id'];
$Emp_name = $row['emp_name'];
$Emp_salary = $row['salary'];
$Emp_designation = $row['designation'];

*/

/*
$query = mysql_query("UPDATE salary SET 
					 emp_id='$Emp_id',
					 emp_name ='$Emp_name',
		 			 salary='$Emp_salary',
					 designation='$Emp_designation' 
					              WHERE id=$id");
				                       or die(mysql_error()); 
	
*/
$UpdateQue = "UPDATE salary SET 
					 emp_id='$Emp_id',
					 emp_name ='$Emp_name',
		 			 salary='$Emp_salary',
					 designation='$Emp_designation' 
					              WHERE id=$id";
				                       
	

/*
$query = "update salary set 
					emp_id='$emp_id', 
					emp_name='$emp_name', 
					salary='$salary', 
					designation='$designation' where id=$id";
					*/

// mysql_query($query);

		if(mysql_query($UpdateQue))
			{
				header("location:salaryedit.php?msg=Record Updated");
			}
			else{
				header("location:salaryeditcontent.php?msg=Record not Updated");
			   }
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");

mysql_close($con);
}
?>