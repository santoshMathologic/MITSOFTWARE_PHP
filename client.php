<?php
session_start();
//checkAdminSession();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$clientname=$_POST['clientname'];
$sitename=$_POST['sitename'];
$phonenumber=$_POST['phonenumber'];
$mailid=$_POST['mailid'];
$totalamount=$_POST['totalamount'];
$advanceamountpaid=$_POST['advanceamountpaid'];
$advanceamountdate=$_POST['advanceamountdate'];
$total=$_POST['total'];
$total=$_POST["totalamount"] - $_POST["advanceamountpaid"]; 
$query = "insert into  clientdetails(clientname,sitename,phonenumber,mailid,totalamount,advanceamountpaid,advanceamountdate,total) values('$clientname','$sitename','$phonenumber','$mailid','$totalamount','$advanceamountpaid','$advanceamountdate','$total')";
 //echo $query;
mysql_query($query);
header("location:clientdetails.php?msg=Created Successfully");
 }
?>