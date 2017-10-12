<?php
session_start();

include ("includes/db_con.php");
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$salary=$_POST['salary'];
$rent=$_POST['rent'];
$water=$_POST['water'];
$internet=$_POST['internet'];
$phonebill=$_POST['phonebill'];
$newspaper=$_POST['newspaper'];
$ebill=$_POST['ebill'];
$cleaning=$_POST['cleaning'];
$otherexpenses=$_POST['otherexpenses'];
$remarks=$_POST['Remarks'];

date_default_timezone_set("Asia/Calcutta");
$updated_time_stamp = date('Y-m-d H:i:s');
$total=$_POST['total'];
$total=$_POST["salary"]+$_POST["rent"]+$_POST["water"]+$_POST["internet"]+$_POST["phonebill"]+$_POST["newspaper"]+$_POST["ebill"]+$_POST["cleaning"]+$_POST["otherexpenses"]; 
$query = "insert into  monthlyexp(date,salary,rent,water,internet,phonebill,newspaper,ebill,cleaning,otherexpenses,Remarks,total) values ('$date','$salary','$rent','$water','$internet','$phonebill','$newspaper','$ebill','$cleaning','$otherexpenses','$remarks','$total')";
 //echo $query;
mysql_query($query);
header("location:monthlyexpenses.php?msg=Created Successfully");
 }
?>