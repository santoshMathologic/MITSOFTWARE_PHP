

function fnValidate()
{	
	   
		var DateVali=document.getElementById("datepicker").value;
		if (DateVali==null||DateVali=="")
 			 {
				document.getElementById("DateError").innerHTML="<snap style='color:red;'>Select Date</snap>";
  				return false;
  			 }
			var Dauthor=document.getElementById("Author").value;
		if (Dauthor==null||Dauthor=="")
 			 {
				document.getElementById("AuthorError").innerHTML="<snap style='color:red;'>Select Author</snap>";
  				return false;
  			 }

		if (isNull(document.thisForm.image,"image")){ return false; }
		if (isNull(document.thisForm.document,"document")){ return false; }
		if (isNull(document.thisForm.pdf,"pdf")){ return false; }
		if (isNull(document.thisForm.audio,"audio")){ return false; }
		if (isNull(document.thisForm.video,"video")){ return false; }
		
		
			var DRemark=document.getElementById("remarks").value;
		if (DRemark==null||DRemark=="")
 			 {
				document.getElementById("RemarkError").innerHTML="<snap style='color:red;'>Enter Remark</snap>";
  				return false;
  			 }
		
		
		
  return true;
}