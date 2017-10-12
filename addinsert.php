<?php
session_start();
checkAdminSession();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{

			$salary=$_POST['salary'];
			$query = "insert into  monthlyexp(salary) values ('$salary')";
			mysql_query($query);
			header("location:addinsert.php?msg=Created Successfully");
 }
?>