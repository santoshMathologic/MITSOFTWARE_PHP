function ChangePasswrd()
{	
	
		var UName=document.getElementById("oldpass").value;
		if (UName==null||UName=="")
 			 {
	document.getElementById("oldpasswrd").innerHTML="<snap style='color:red;'></snap>Enter Password";
				return false;
  			 }
	    
		var NewPasswrd=document.getElementById("NewPass").value;
		if (NewPasswrd==null || NewPasswrd=="")
 			 {document.getElementById("NewPass").innerHTML="<snap style='color:red;'></snap>Enter the Project title";
  				return false;
  			 }
	  var ConfrmPass=document.getElementById("confirmPass").value;
		if (ConfrmPass==null || ConfrmPass=="")
 			 {document.getElementById("confirmPass").innerHTML="<snap style='color:red;'></snap>Enter the Project title";
  				return false;
  			 }	
	
  return true;
}