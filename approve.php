<?php
include "includes/db_con.php";
if(isset($_GET['id']))
{
$id = $_GET['id'];
$username = $_GET['username'];
$designation = $_GET['designation'];
$query = "update user_type set is_approved=0 where user_login_fk='$id'";
mysql_query($query) or die(mysql_error());
header("location:addtimeshet.php?msg=Approved Successfully.");
}
?>