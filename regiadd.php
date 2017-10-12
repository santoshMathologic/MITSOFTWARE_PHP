<?php
session_start();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$employeeid=$_POST['employeeid'];
$username=$_POST['username'];
$password=$_POST['password'];
$query = "insert into user_type(userlogin_fk,employeeid,username,password) values (2,'$employeeid','$username','$password')";
 //echo $query;
mysql_query($query);
header("location:regiemployee.php?msg=Created Successfully");
 }
?>