<?php
include "includes/db_con.php";
checkAdminSession();
if(isset($_POST['sub']))
{



$id = $_REQUEST['id'];
//$id = $_GET['id'];

$boolValue  =  false;

$clientname = $_POST['clientname'];
$sitename = $_POST['sitename'];
$phonenumber = $_POST['phonenumber'];
$mailid = $_POST['mailid'];
$totalamount = $_POST['totalamount'];
$advanceamountpaid = $_POST['advanceamountpaid'];
$advanceamountdate = $_POST['advanceamountdate'];
$total = $_POST['total'];
$total=$_POST["totalamount"] - $_POST["advanceamountpaid"]; 

		if($id!=null)
		{
			$boolValue =  true;
			$query =mysql_query("UPDATE clientdetails SET 
			clientname='$clientname', 
			sitename='$sitename', 
			phonenumber='$phonenumber', 
			mailid='$mailid', totalamount='$totalamount',
			advanceamountpaid='$advanceamountpaid',
			advanceamountdate='$advanceamountdate',
			total='$total' where id = $id");
			
		}

		if($boolValue)
			
				header("location:clientedit.php?msg=Record Updated successfully");
		else
				header("location:clienteditcontent.php?msg=Record not Updated");
			
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?>