		<?php

			if(isset($_GET['id']))
				{
					include ("includes/db_con.php");
					$id=$_REQUEST['id'];
					$query="DELETE  FROM documents WHERE id = '$id'";
					if(mysql_query($query))
					header("location:DocumentView.php?msg=Record Deleted");
					else
					header("location:DocumentView.php?msg=Record not Deleted");
					
				}
?>

