<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<?php
							include "includes/db_con.php";
							{
							$query = "select * from  salary";
							$res = mysql_query($query);
							$num_rows = mysql_num_rows($res);
								if($num_rows>=1)
								{
							echo"<table id='table_struct' border='1' width='100%' cellspacing='1' cellpadding='1'><tr class='tr_class'>
							<td align='center' style='font-weight:bold'>Employee Id</td>
							<td align='center' style='font-weight:bold'>Employee Name</td>
							<td align='center' style='font-weight:bold'>Salary</td>
   							<td align='center' style='font-weight:bold'>Designation</td>
							</tr>";
								while($row = mysql_fetch_array($res))
								{
									    $id = $row['id'];
										echo"<tr class='tr_class1'>
										<td align='center'>".$row['emp_id']."</td>
										<td align='center'>".$row['emp_name']."</td>
										<td align='center'>".$row['salary']."</td>
										<td align='center'>".$row['designation']."</td>";
										
									echo "</tr>";
								}
								echo "</table>";
							}
							else	{
								echo "<table  width='100%' cellspacing='1' cellpadding='1'><tr class='tr_class'><td>No Record Found!!</td></tr></table>";
								}
							}	
						 	?>


</body>
</html>