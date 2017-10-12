<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#view_table
{
	float:left;
	width:733px;
	height:500px;
	/*background-color:rgb(203,226,237);*/
		
}
#TableStyle
{
	/*background-color: #8BD3DA; */
	width: 733px;
	height:480px;
	/*background: #dddddd; */
	
	font-size:14px;
	border-bottom-right-radius: 0.5em;
	border-top-right-radius: 0.5em;
	border-bottom-left-radius: 0.5em;
	border-top-left-radius: 0.5em;
	
}
#TableStyle table td 
{
	alignment-adjust:central;
	width:52px;
	
}
#TableStyle table th
{
	width:50px;
	alignment-adjust:central;
}
</style>
</head>




<body>


<?php
  
   include("includes/db_con.php");
   checkAdminSession();
   
		/*
		$con=mysql_connect("multiinnovatecom.ipagemysql.com","mitsoftware","Admin$567");
mysql_select_db("mitsoftware",$con);
*/
	                               								  
	  $Query=mysql_query('SELECT *FROM entertimesheet');
      echo "<div id='TableStyle'>";
	   echo "<table align='center' cellpadding='8px' cellspacing='1px' border='0'>";
	    echo "<tr>";
		   echo "<th>" ."Date"."</th>" ;
		   echo "<th>" ."Project Title". "</th>" ;
		   echo "<th>" ."Work Assigned by". "</th>" ;
		   echo "<th>" ."Work status". "</th>" ;
		   echo "<th>" ."Project Type". "</th>" ;
		   echo "<th>" ."Task". "</th>" ;
		   echo "<th>" ."Start Time". "</th>" ;
		   echo "<th>" ."End Time". "</th>" ;
		   echo "<th>" ."Duration". "</th>" ;
		   echo "<th>" ."Remarks". "</th>" ;
		   echo	"</tr>";
		   echo "</table>";
	  while($row = mysql_fetch_array($Query)) 
		{
	       echo "<table align='center' cellpadding='10px' cellspacing='1px' border='0'>";	
		   echo "</tr>";
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