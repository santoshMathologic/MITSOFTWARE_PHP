<?php
if(isset($_POST['sub']))
{
$id = $_GET['id'];
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
$Rem=$_POST['Remarks'];

date_default_timezone_set("Asia/Calcutta");
$updated_time_stamp = date('Y-m-d H:i:s');
$total=$_POST['total'];
$total=$_POST["salary"]+$_POST["rent"]+$_POST["water"]+$_POST["internet"]+$_POST["phonebill"]+$_POST["newspaper"]+$_POST["ebill"]+$_POST["cleaning"]+$_POST["otherexpenses"]; 
include "includes/db_con.php";
$query = "update monthlyexp set date='$date', salary='$salary', rent='$rent', water='$water',internet='$internet',phonebill='$phonebill',newspaper='$newspaper',ebill='$ebill',cleaning='$cleaning',otherexpenses='$otherexpenses',total='$total',Remarks='$Rem' where id = $id";
if(mysql_query($query))
header("location:monthlyedit.php?msg=Record Updated");
else
header("location:monthlyeditcontent.php?msg=Record not Updated");
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?>