<?php
include('includes/db_con.php');
if(isset($_POST['username']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from user_type where username='$username' and password='$password'");
$row=mysql_num_rows($query);
if($row==0)
{
echo "<span style='color:green;font-size:12px;'>New User</span>";
}
else
{
echo "<span style='color:red;font-size:12px;'>Already exist</span>";
}
}
?>