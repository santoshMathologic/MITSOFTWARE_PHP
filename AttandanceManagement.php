<?php
include ("includes/db_con.php");
if(isset($_POST['submit']))
{
		$date=$_POST['date'];
		$Emp_Code=$_POST['EMP_CODE'];
		$Emp_Name=$_POST['EMP_NAME'];
		$Emp_Desi=$_POST['EMP_DESI'];
		$Emp_Time_In=$_POST['Time-In'];
		$Emp_Time_Out=$_POST['Time-Out'];
		$Emp_Remark=$_POST['Remarks'];
		
		$Emp_designation  = $Emp_Desi." "."developer"; 
		
$Query= "INSERT INTO Emp_Attandance_Report(date,Emp_Code,Emp_Name,Emp_Designation,Time_In,Time_Out,remark) values ('$date','$Emp_Code','$Emp_Name','$Emp_designation','$Emp_Time_In','$Emp_Time_Out','$Emp_Remark')";

		if(mysql_query($Query))
		    header("location:AttandanceSheet.php?msg=Created Successfully");
            


}
?>