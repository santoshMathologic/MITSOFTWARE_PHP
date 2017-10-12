<?php
include "includes/db_con.php";
checkAdminSession();
if(isset($_POST['sub']))
{
$id = $_GET['id'];
$domainname = $_POST['domainname'];
$webhost = $_POST['webhost'];
$username = $_POST['username'];
$password = $_POST['password'];
$details = $_POST['details'];
$query = "update mitpassword set domainname='$domainname', webhost='$webhost', username='$username', password='$password', details='$details' where id = $id";
if(mysql_query($query))
header("location:passedit.php?msg=Record Updated");
else
header("location:editcontent.php?msg=Record not Updated");
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?>