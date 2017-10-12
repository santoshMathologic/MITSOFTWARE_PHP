



	<?php
		if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				include "includes/db_con.php";
				$query = "DELETE  FROM salary where id = '". $id ."'";
				if(mysql_query($query))
				header("location:salaryedit.php?msg=Record Deleted");
				else
				header("location:salaryeditcontent.php?msg=Record not Deleted");
			}
		?>
