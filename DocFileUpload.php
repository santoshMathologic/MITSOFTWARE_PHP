<?php

include("includes/db_con.php");
if(isset($_POST['submit']))
{
		$date    		=  $_POST['date'];
		$author  		=  $_POST['author'];
		$fileName 		=  $_FILES['Filename']['name'];
 		$tmpName  		=  $_FILES['Filename']['tmp_name'];
		$fileSize 		=  $_FILES['Filename']['size'];
		$fileType 		=  $_FILES['Filename']['type'];
		$rem			=  $_POST['remark'];
		$target 		= "Doc/";
	  	$target 		= $target .basename( $_FILES['Filename']['name']);
		$fp  = fopen($tmpName,'r');
		$content = fread($fp,filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc())
			{   $fileName = addslashes($fileName);
			}
			if(move_uploaded_file($_FILES['Filename']['tmp_name'],$target)) 
				{	  
$query = "INSERT INTO documents(date,author,DocName,DocType,DocSize,DocContent,remark) VALUES ('$date','$author', '$fileName', '$fileType','$fileSize','$content','$rem')";
	if(mysql_query($query))
			{     header("location:Documents.php?msg=Submited Successfully");
			}
	  }
	  
	  else
         {echo "<lable>" . "Invalid Image Format" . "</label>";
         }
	
	  }

?>
 