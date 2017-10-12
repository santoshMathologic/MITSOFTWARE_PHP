<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleadmin.css"/>
<title>Multiinnovate Technologies Pvt Ltd.</title>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
/*$(document).ready(function(){
$("#username").keyup(function() {
var username = $('#username').val();
if(username=="")
{
$("#disp").html("");
}
else
{
$.ajax({
type: "POST",
url: "user_check.php",
data: "username="+ username ,
success: function(html){
$("#disp").html(html);
}
});
return false;
}
});
});*/
</script>
<body>
<div id="page" >
<form name="frm1" action="regiadd.php" method="post" onsubmit="return validate('frm1')">
    <div id="title" style="font-weight:bold;margin-top:20px;">
	<center>REGISTER EMPLOYEE</center>
	</div><br/>
	<div id="lab1" style="margin-top:50px" >
    Employee Id 
    <div id="txtdiv">
       <input type="text" name="employeeid" id="employeeid" class="txt" autocomplete=off>  
    </div>
  </div>
       
    <div id="lab1" style="margin-top:20px" >
   User Name
  
    <div id="txtdiv">
       <input type="text" name="username" id="username" class="txt" autocomplete=off>  <div id="disp"></div>
    </div>
      </div>
	<div id="lab1" style="margin-top:20px" >
    Password 
    <div id="txtdiv">
       <input type="password" name="password" id="password" class="txt" autocomplete=off>  
    </div>
  </div>
	<div>
    <input type="submit" name="submit" value="Register" class="butt"/>
	</div><br/>
	<div style="margin-top:20px;margin-left:145px;">
      <a href="index.php">Home</a>
	</div>
</form>
</div>
</body>
</html>