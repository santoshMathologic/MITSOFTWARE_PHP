<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#TableStyle
{
	background-color: #666;
	width: 600px;
	height:280px;
	border: 2px solid;
	background: #dddddd;
	border-bottom-right-radius: 1em;
	border-top-right-radius: 1em;
	border-bottom-left-radius: 1em;
	border-top-left-radius: 1em;
	overflow-y:scroll;
}
#TableStyle table td
{
	alignment-adjust:central;
	width:120px;
}
</style>
</head>
<body>
<?php
      include "includes/db_con.php";
	                               								  
	  $Query=mysql_query('SELECT *FROM employee_reg');
      echo "<div id='TableStyle'>";
	  while($row = mysql_fetch_array($Query)) 
		{
	       echo "<table align='center' cellpadding='5px' cellspacing='1px'>";	
		  
		   echo "<tr>";
		   echo "<td>" .$row['date']. "</td>" ;
		   echo "<td>" .$row['project_title']. "</td>";
		   echo "<td>" .$row['assigned_by']. "</td>";
	  	   echo "<td>" .$row['work_status']. "</td>";	
		   echo "<td>" .$row['project_type']. "</td>";
		   echo "<td>" .$row['task']. "</td>";
		   echo "<td>" .$row['start_time']. "</td>";
	  	   echo "<td>" .$row['end_time']. "</td>";	
		   echo "<td>" .$row['duration']. "</td>";
		   echo "<td>" .$row['remarks']. "</td>";
	       echo "</tr>";
		   echo "</table>";
		}
		echo "</div>";
     
?>		
				
</body>
</html>