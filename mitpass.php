<?php
session_start();
//checkAdminSession();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$domainname=$_POST['domainname'];
$webhost=$_POST['webhost'];
$username=$_POST['username'];
$password=$_POST['password'];
$details=$_POST['details'];
$query = "insert into  mitpassword(domainname,webhost,username,password,details) values('$domainname','$webhost','$username','$password','$details')";
//echo $query;
mysql_query($query);
header("location:mitpassword.php?msg=Created Successfully");
 }
?>