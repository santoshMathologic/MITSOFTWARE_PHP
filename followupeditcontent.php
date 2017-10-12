<?php
include ("includes/db_con.php");
checkAdminSession();
if(isset($_POST['sub']))
{
$id = $_REQUEST['id'];   
$res = mysql_query("select * from followups ");
$row = mysql_fetch_object($res);

$CustName = $_POST['customername'];
$details = $_POST['details'];
$callback = $_POST['callback'];
$phonenumber = $_POST['phonenumber'];
$mailid = $_POST['mailid'];

	$result="UPDATE followups SET customername='$CustName',details='$details',
	callback='$callback',phonenumber='$phonenumber',mailid='$mailid'
		  WHERE id=$id";
		  if(mysql_query($result))
			header("location:followupedit.php?msg=Record Updated");
			else
			header("location:followueditcontent.php?msg=Record not Updated");

//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?> 