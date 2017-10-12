<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];

include "includes/db_con.php";
$query = "DELETE  FROM mitpassword where id = '". $id ."'";
if(mysql_query($query))
header("location:passedit.php?msg=Record Deleted");
else
header("location:editcontent.php?msg=Record not Deleted");
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?>
