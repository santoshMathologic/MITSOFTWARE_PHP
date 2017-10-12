<?php
include "includes/db_con.php";
if(isset($_GET['id']))
{
$id = $_GET['id'];
$ap = $_GET['is_approved'];
$id = $row['id'];
$userlogin_fk = $row['userlogin_fk'];
date_default_timezone_set("Asia/Calcutta");
$updated_time_stamp = date('Y-m-d H:i:s');
$query = "update user_type set is_approved=1 where user_login_fk='$id'";
mysql_query($query) or die(mysql_error());
header("location:addtimeshet.php?msg=Discard.");
}
?>