<?php

  $id=$_REQUEST['id'];
  include ("includes/db_con.php");
  checkAdminSession();
  $Query = "SELECT Doc FROM documents WHERE id='$id'";
  $result = mysql_query($Query);
  $row = mysql_fetch_assoc($result);
  header("Content-type: image/jpeg");
  echo $row['Doc'];
?>