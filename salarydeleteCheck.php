<?php
if(isset($_POST['delete']))
{
include ("includes/db_con.php");
$check=$_POST['checkbox'];

		foreach($check as $del_id) 
				{
		            $Query= "DELETE from salary WHERE id = '$del_id'";
        		    
				}
				if(mysql_query($Query))
					header("location:salaryedit.php?msg=Record Deleted");
						else
			    	header("location:salaryedit.php?msg=Record not Deleted");

}
?>
