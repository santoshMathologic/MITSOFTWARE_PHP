


function EmpValidation()
{	
	
	
		var uName=document.getElementById("uname").value;
		if (uName==null||uName=="")
 			 {  document.getElementById("EmpNameError").innerHTML="<snap style='color:red; '>Employee Name</snap>";
  				return false;
  			 }
			 
		var EpassVal=document.getElementById("Epass").value;
		if (EpassVal==null||EpassVal=="")
 			 {
				document.getElementById("EmpPassError").innerHTML="<snap style='color:red;'>Enter Passwrd</snap>";
  				return false;
  			 }
			 
	    var EmailID=document.getElementById("EmailID").value;
		if (EmailID==null || EmailID=="")
 			 {  document.getElementById("EMID").innerHTML="<snap style='color:red;'>Enter Mail</snap>";
  				return false;
  			 }
			 
		var DatePcker=document.getElementById("datepicker").value;
		if (DatePcker==null || DatePcker=="")
 			 {  document.getElementById("DateError").innerHTML="<snap style='color:red;'>Enter DOB</snap>";
  				return false;
  			 }
			 
	
	
		var EsexMale=document.getElementById("ESex").value;
		if (EsexMale==null || EsexMale=="" )
 			 {
				 document.getElementById("EGender").innerHTML="<snap style='color:red;'>Select Gender</snap>";
  				return false;
  			 }
	
		
		var EDesignation=document.getElementById("Ebranch").value;
		if (EDesignation==null || EDesignation=="")
 			 {
				 document.getElementById("EDesi").innerHTML="<snap style='color:red;'>Enter Designation</snap>";
  				return false;
  			 } 
		
		var MStatue=document.getElementById("MMarried").value;
		if (MStatue==null || MStatue=="" || MStatue=="default")
 			 {   document.getElementById("EMstatue").innerHTML="<snap style='color:red;'>Select Statue</snap>";
  				  return false;
  			 }
		
		var EAddress=document.getElementById("EAdd").value;
		if (EAddress==null || EAddress=="")
 			 {
				document.getElementById("EAddressError").innerHTML="<snap style='color:red;'>Select Address</snap>";
  				return false;
  			 }

		var ECountryValue=document.getElementById("ECountry").value;
		if (ECountryValue==null || ECountryValue=="" || ECountryValue=="default")
 			 {  document.getElementById("ECountryError").innerHTML="<snap style='color:red;'>Select Country</snap>";
  				return false;
  			 }
		var EStatesValue=document.getElementById("EStates").value;
		if (EStatesValue==null || EStatesValue=="")
 			 { document.getElementById("EStatesError").innerHTML="<snap style='color:red;'>Select States</snap>";
  			   return false;
  			 }
		
		var ECityValue=document.getElementById("ECity").value;
		if (ECityValue==null || ECityValue=="")
 			 {document.getElementById("ECityError").innerHTML="<snap style='color:red;'>Enter City</snap>";
  				return false;
  			 }

		var EPinValue=document.getElementById("EPinCode").value;
		if (EPinValue==null || EPinValue=="")
 			 {document.getElementById("EPinError").innerHTML="<snap style='color:red;'>Enter Pin Code</snap>";
  				return false;
  			 }
			 
			 var EMobileValue=document.getElementById("EMobileNumberID").value;
		if (EMobileValue==null || EMobileValue=="")
 			 {document.getElementById("EMobileNumberError").innerHTML="<snap style='color:red;'>Enter Mobile Number</snap>";
  				return false;
  			 }
		



  return true;
}