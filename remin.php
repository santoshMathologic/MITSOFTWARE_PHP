<?php
session_start();
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$details=$_POST['details'];
$email =$_POST['email'];
$day=$_POST['day'];
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
/*$details = mktime(0,0,0,date("m"),date("d")-1,date("Y"));
echo "Yesterday was ".date("l", $details)."</br>";*/
/*$today = date("F j, Y");
echo "$today";*/
$query = "insert into reminder(details,date,email,month,year,day) values('$details','$date','$email','$month','$year','$day')";
 //echo $query;
mysql_query($query);
header("location:reminders.php?msg=Created Successfully");
 }
?>

 