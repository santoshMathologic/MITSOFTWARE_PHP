<?php
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
		$emp_id=$_POST['emp_id'];
		$emp_name=$_POST['emp_name'];
		$salary=$_POST['salary'];
		$designation=$_POST['designation'];
			$query = "insert into  salary(emp_id,emp_name,salary,designation) values 						('$emp_id','$emp_name','$salary','$designation')";
echo $query;
mysql_query($query);
header("location:salary.php?msg=Created Successfully");
 }
?>