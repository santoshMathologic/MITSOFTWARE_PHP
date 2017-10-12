<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];

include "includes/db_con.php";
$query = "DELETE  FROM monthlyexp where id = '". $id ."'";
if(mysql_query($query))
header("location:monthlyedit.php?msg=Record Deleted");
else
header("location:monthlyeditcontent.php?msg=Record not Deleted");
//header("location:index.php?msg=true");
//else
//header("location:index.php?msg=false");
}
?>
