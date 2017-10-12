<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accordian</title>
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" ></script>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$("#accordian h3").click(function()
		{
		$("#accordian ul ul").slideUp();
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})

</script>
</head>
<body>
<div id="accordian" >
	<ul>
		<li>
			<h3>Bulletien Board</h3>
			<ul>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Search</a></li>
				<li><a href="#">Graphs</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</li>
		
		<li >
			<h3>Birthday</h3>
			<ul>
				<li><a href="#">Today's tasks</a></li>
				<li><a href="#">Urgent</a></li>
				<li><a href="#">Overdues</a></li>
				<li><a href="#">Recurring</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</li>
		<li>
			<h3>Calendar</h3>
			<ul>
				<li><a href="#">Current Month</a></li>
				<li><a href="#">Current Week</a></li>
				<li><a href="#">Previous Month</a></li>
				<li><a href="#">Previous Week</a></li>
				<li><a href="#">Next Month</a></li>
				<li><a href="#">Next Week</a></li>
				<li><a href="#">Team Calendar</a></li>
				<li><a href="#">Private Calendar</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</li>
		
	</ul>
</div>

<!-- prefix free to deal with vendor prefixes -->
</body>
</html>
