

function TimeValiadtion()
{	
		
		var Dat=document.getElementById("datepicker").value;
		if (Dat==null||Dat=="")
 			 {
				document.getElementById("date1").innerHTML="<snap style='color:red;'>Select the Time</snap>";
  				return false;
  			 }
	   
		var Project_field=document.getElementById("Project_title").value;
		if (Project_field==null || Project_field=="")
 			 {document.getElementById("title").innerHTML="<snap style='color:red;width:300px;'>Enter the Project title</snap>";
  			 return false;
  			 }
	
		var Assigned=document.getElementById("Work_Assigned").value;
		if (Assigned==null || Assigned=="")
 			 {  document.getElementById("assigned").innerHTML="<snap style='color:red;'>Enter the Project Assigned By</snap>";
  				return false;
  			 }
	
		var Status=document.getElementById("Work_Status").value;
		if (Status==null || Status=="")
 			 {document.getElementById("status").innerHTML="<snap style='color:red;'>Enter the Project Status</snap>";
  				return false;
  			 }
		
		var Types=document.getElementById("project_Type").value;
		if (Types==null || Types=="" || Types=="default")
 			 {document.getElementById("prj_type").innerHTML="<snap style='color:red;'>Select the Project Type</snap>";
  			return false;
  			 }
		
		var Task=document.getElementById("task").value;
		if (Task==null || Task=="")
 			 {
  				//alert("Enter the Project Task");
				document.getElementById("task1").innerHTML="<snap style='color:red;'>Enter the Project Task</snap>";
  				return false;
  			 }
		<!-- Project_task Validation End--!>
		
		<!-- Start_time Validation Start--!>
		var Start_time=document.getElementById("Start_Picker").value;
		if (Start_time==null || Start_time=="")
 			 {
  				//alert("Select the Project Start Time");
				document.getElementById("start_time").innerHTML="<snap style='color:red; width:140px;'>Select the Project Start Time</snap>";
  				return false;
  			 }
		<!-- Start_time Validation End--!>
		
		<!-- End_time Validation Start--!>
		var End_time=document.getElementById("End_Picker").value;
		if (End_time==null || End_time=="")
 			 {
  				//alert("Select the Project End Time");
				document.getElementById("end_time").innerHTML="<snap style='color:red;width:140px;'>Select the Project End Time</snap>";
  				return false;
  			 }
		<!-- End_time Validation End--!>
				
		<!-- Duration Validation Start--!>
		var Duration=document.getElementById("duration").value;
		if (Duration==null || Duration=="")
 			 {
  				
				document.getElementById("duration1").innerHTML="<snap style='color:red;'>Enter the Project Duration</snap>";
  				return false;
  			 }
		
		var Remarks=document.getElementById("remarks").value;
		if (Remarks==null || Remarks=="")
 			 {
  		
				document.getElementById("remark").innerHTML="<snap style='color:red;'>Enter the Project Remarks</snap>";
  				return false;
  			 }
		

  return true;
}