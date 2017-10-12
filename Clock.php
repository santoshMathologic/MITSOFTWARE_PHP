<html>
<head>
<title>Digital Clock </title>
<script type="text/javascript">
function digital_clock()
{
	var date=new Date();
	var hours=date.getHours();
	var minutes=date.getMinutes();
	var seconds=date.getSeconds();
	hours=addZero(hours);
	minutes=addZero(minutes);
	seconds=addZero(seconds);
	document.getElementById('hours').innerHTML = hours;
	document.getElementById('minutes').innerHTML = minutes;
	document.getElementById('seconds').innerHTML = seconds;
	setTimeout('digital_clock()',500);
}
function addZero(date_part)
{
 	if(date_part < 10)
		{
  			date_part="0" + date_part;
                               }
		 return date_part;
}
</script>
</head>
<body onLoad="digital_clock()">
<center>
<div style="border:black 2px solid;width:100;>
<b id=hours> </b> &nbsp;:&nbsp;
<b id=minutes> </b>&nbsp;:&nbsp;
<b id=seconds> </b> 
</div>
</center>
</body>
</html> 
