<?php
session_start();
//checkAdminSession();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$customername=$_POST['customername'];
$details=$_POST['details'];
$callback=$_POST['callback'];
$phonenumber=$_POST['phonenumber'];
$mailid=$_POST['mailid'];
$query = "insert into   followups(customername,details,callback,phonenumber,mailid) values('$customername','$details','$callback','$phonenumber','$mailid')";
 //echo $query;
mysql_query($query);
header("location:followup.php?msg=Created Successfully");
 }
?>