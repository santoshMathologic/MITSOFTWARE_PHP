<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Employee Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script type="text/javascript" src="js/behaviour.js"></script>

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
<body>
	<div id="wrapper">
		<div id="head">
			<div id="logo_user_details">
				<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
				<div id="user_details">
					<ul id="user_details_menu">
						<li>Welcome <strong>Administrator</strong></li>
						<li>
							<ul id="user_access">
							<li class="last"><a href="logout.php">Log out</a></li>
                                	  
                                      <!--
                                        <span style="background:#FF0; border:#000 1px solid; font:'Times New Roman', Times, serif bold; color:#000">
										<b id=hours></b>&nbsp;:&nbsp;
										<b id=minutes></b>&nbsp;:&nbsp;
										<b id=seconds></b> &nbsp;
						
                        		   </span>
                                   -->
                        	</ul>
						</li>
						
					</ul>
				</div>
							</div>
			<div id="menus_wrapper">
				
			  <div id="main_menu">
					<ul>
						<li><a href="emphome.php" class="selected"><span><span>Home</span></span></a></li>
                        <li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                         <li><a href="TimeSheetChangePass.php"><span><span>ChangePassword</span></span></a></li>
						<li><a href="AttandanceSheet.php" ><span><span>Attandance Management</span></span></a></li> 
						
					</ul>
				</div>
			</div>
			
	</div>
  <div id="content">
			<div id="page">
				<div class="inner">
					<div class="section">
						<div class="title_wrapper">
							<h2 style="margin-left:450px";> EMPLOYEE INFORMATION</h2>
							<ul class="section_menu">
							
							</ul>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
				  <div class="section_content">
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
											
										<p align="justify">Multiinnovate Technologies  is started in 2008. it is a new-age creative communications and Animation company based Bangalore India, specializing in Multimedia and web Technology Solutions like Interactive presentations, Product presentations, Marketing presentations, Flash presentations, Video presentations (AV), Web Designing 2D Animations & 3D Animations, 3D Modeling, 3D Walkthroughs, Special Effects for Films, Animated Greetings ,Video Editing, Templates Designing, Flash Banner Design, Logo Designing, Poster Designing,3D Titling, Background Animation, Special effects,  e-learning, Internet Solutions like website Design, website Development, Application Development, web Hosting, web promotion, Multi-language Websites, Print Solutions like Corporate Identity, Branding, Brochures, Posters, Digital imaging and effects, trade show displays, Touch screen Kiosks PowerPoint presentations, Virtual Walk-through's.</p>
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="inner">
					<div class="section">
						<div class="title_wrapper">
							<h2>Sidebar Menu</h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
				  <div class="section_content">
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
												<ul class="sidebar_menu">
                        
                        <li><a href="emphome.php" class="selected"><span><span>Home</span></span></a></li>
						<li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php"><span><span>ChangePassword</span></span></a></li>
                        <li><a href="AttandanceSheet.php" ><span><span>Attandance Management</span></span></a></li> 
						                     
                                                   </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>

							
						</div>

					</div>

					<div class="section_content">
							
							<img src="images/chitfundside.png"/>
						</div>
				</div>
			</div>

				</div>

		
	</div>

	<div id="footer">
		<div id="footer_inner">
	
			<center><p> Copyright &copy; 2013  Multiinnovate Technologies Pvt Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies Pvt Ltd.</a></p></center>
	
		</div>
	</div>

	</body>
</html>

