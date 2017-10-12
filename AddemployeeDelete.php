<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
include "includes/db_con.php";
$query = "DELETE  FROM member_details where id = '". $id ."'";
if(mysql_query($query))
header("location:AddEmployeeView.php?msg=Record Deleted");
else
header("location:AddEmployeeView.php?msg=Record not Deleted");
mysql_close($con);

}
?>