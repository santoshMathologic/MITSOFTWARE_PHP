<?php

include ("includes/db_con.php");
checkAdminSession();
$id =  $_REQUEST['id'];
$Query= "SELECT  *FROM  mitpassword WHERE id=$id";
$res=mysql_query($Query) or die(mysql_error());
$row=mysql_fetch_object($res);
$DomainName=$row->domainname;  
header('Location:http://'.$DomainName);
mysql_close($con);
?>



