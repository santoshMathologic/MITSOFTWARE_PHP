<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
<title> Technologies</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"/>
<script type="text/javascript" src="js/behaviour.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var id = '#dialog';
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#mask').css({ 'width': maskWidth, 'height': maskHeight });
            $('#mask').fadeIn(1000);
            $('#mask').fadeTo("slow", 0.8);
            var winH = $(window).height();
            var winW = $(window).width();
            $(id).css('top', winH / 2 - $(id).height() / 2);
            $(id).css('left', winW / 2 - $(id).width() / 2);
            $(id).fadeIn(2000);
            $('.window .close').click(function(e) {
                e.preventDefault();
                $('#mask').hide();
                $('.window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });

        });

    </script>
    <style type="text/css">
      
        a
        {
            color: #333;
            text-decoration: none;
        }
        a:hover
        {
            
			color:#00CC33;
			/*color: #ccc; */
            text-decoration: none;
        }
        #mask
        {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9000;
            background-color: #000;
            display: none;
        }
        #boxes .window
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 440px;
            height: 200px;
            display: none;
            z-index: 9999;
            padding: 20px;
        }
        #boxes #dialog
        {
            width: 575px;
            height: 503px;
            padding: 10px;
            background-color:#FFF;
        }
    </style>
    <!--pop up-->

<!-- Clock ------------>

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





<!--              -------->   

  
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" ></script>
<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<link href="css/AccordianStyleSheet.css" rel="stylesheet" type="text/css" />


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

<body onLoad="digital_clock()">


  <form id="form1" runat="server">
  
    <div id="boxes" >
        <div style="top:199.5px; left: 551.5px; display: none;" id="dialog" class="window">
         <h2>Today Alert</h2>
      <?php
							include ("includes/db_con.php");
							{
							checkAdminSession();
							$query = "SELECT * FROM reminder";
							$res = mysql_query($query);
							$num_rows = mysql_num_rows($res);
								if($num_rows>=1){
							echo"<table id='table_struct' border='1' width='100%' cellspacing='1' cellpadding='1'>
							<tr class='tr_class'>
							<td align='center' style='font-weight:bold'>Details</td>
							<td align='center' style='font-weight:bold'>Email</td>
							<td align='center' style='font-weight:bold'>Date</td>
							<td align='center' style='font-weight:bold'>Month</td>
							<td align='center' style='font-weight:bold'>Year</td>
							<td align='center' style='font-weight:bold'>sysdate</td>
							</tr>";
								while($row = mysql_fetch_array($res))
								{
								
										echo"<tr class='tr_class1'>
										<td align='center'>".$row['details']."</td>
										<td align='center'>".$row['email']."</td>
										<td align='center'>".$row['date']."</td>
										<td align='center'>".$row['month']."</td>
										<td align='center'>".$row['year']."</td>
										<td align='center'>".$row['sysdate']."</td>";										
									echo "</tr>";
								}
								echo "</table>";
							}
							else	{
								echo "<table  width='100%' cellspacing='1' cellpadding='1'><tr class='tr_class'><td>No Record Found!!</td></tr></table>";
								}
							}	
						 	?><br /><br />   
   <a href="#" class="close"><input type="submit" value="CLOSE" style="float:left;margin-left:240px;"></a>
        </div>
      
        <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
        </div>
    </div>
    
    </form>


	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
		<!--[if !IE]>start head<![endif]-->
		<div id="head">
			
			
			<div id="logo_user_details">
				<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
				
				<div id="user_details">
					<ul id="user_details_menu">
						<li>Welcome <strong>Administrator</strong></li>
						<li>
							<ul id="user_access">
								
								<li class="last"><a href="logout.php">Log out</a></li>
                                
                                
                                
                                <li>
                                	   <span style="background:#FF0; border:#000 1px solid; font:'Times New Roman', Times, serif bold; color:#000">
										<b id=hours></b>&nbsp;:&nbsp;
										<b id=minutes></b>&nbsp;:&nbsp;
										<b id=seconds></b> &nbsp;
								   </span>
                               
                                </li>
                                
							</ul>
						</li>
						
					</ul>
					
					
				</div>
				
				
				
				
			</div>
            
            <!-- Side Bar Menu ---->
            
			<div id="menus_wrapper">
				<div id="main_menu">
					<ul>
						    <li><a href="home.php" class="selected"><span><span>Home</span></span></a></li>
                            <li><a href="monthlyview.php" ><span><span>Expenses</span></span></a></li>
                            <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						    <li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						    <li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						    <li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						    <li><a href="reminders.php"><span><span>Remainder's</span></span></a></li>
                            <li><a href="DocumentView.php"><span><span>Document's</span></span></a></li>  
                           
                        
						          	
					</ul>
				</div>
				
				
				
				
			</div>
			
			
			
			
		</div>
	
		
	
	  <div id="content">
			<div id="page">
				<div class="inner">
					
						<div class="section_content">
							
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											
									</div>
								</div>
							</div>
						
						</div>
						
					</div>
					
					<div class="section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">Introduction</h2>
							
							<!--[if !IE]>start section menu<![endif]-->
							<ul class="section_menu">
								
							</ul>
							<!--[if !IE]>end section menu<![endif]-->
							
							
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
				  <div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
											
										<p align="justify">Multiinnovate Technologies  is started in 2008. it is a new-age creative communications and Animation company based Bangalore India, specializing in Multimedia and web Technology Solutions like Interactive presentations, Product presentations, Marketing presentations, Flash presentations, Video presentations (AV), Web Designing 2D Animations & 3D Animations, 3D Modeling, 3D Walkthroughs, Special Effects for Films, Animated Greetings ,Video Editing, Templates Designing, Flash Banner Design, Logo Designing, Poster Designing,3D Titling, Background Animation, Special effects,  e-learning, Internet Solutions like website Design, website Development, Application Development, web Hosting, web promotion, Multi-language Websites, Print Solutions like Corporate Identity, Branding, Brochures, Posters, Digital imaging and effects, trade show displays, Touch screen Kiosks PowerPoint presentations, Virtual Walk-through's.</p>
												
												
												<!--[if !IE]>start forms<![endif]-->
												
												<!--[if !IE]>end forms<![endif]-->	
												
												<!--[if !IE]>start system messages<![endif]-->
												
												<!--[if !IE]>end system messages<![endif]-->
														
												
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--[if !IE]>end section content top<![endif]-->
							<!--[if !IE]>start section content bottom<![endif]-->
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							<!--[if !IE]>end section content bottom<![endif]-->
							
						</div>
						<!--[if !IE]>end section content<![endif]-->
					</div>
					<!--[if !IE]>end section<![endif]-->
					
					
					
					
					<!--[if !IE]>start section<![endif]-->	
					<div class="section table_section">
						
					</div>
					
					
					
					
						
				</div>
			</div>
			<!--[if !IE]>end page<![endif]-->
			<!--[if !IE]>start sidebar<![endif]-->
			<div id="sidebar">
				<div class="inner">
					
					<div class="section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2>Sidebar Menu</h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
				  <div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
												<ul class="sidebar_menu">
													  <li><a href="monthlyexpenses.php" class="selected"><span><span>Expenses</span></span></a></li>
                                                         <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Remainder's</span></span></a></li> 
                         <li><a href="DocumentView.php"><span><span>Document's</span></span></a></li> 
						
													
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
                            
<!---                           
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
--->

                            
                            
                            
                          
						</div>
				
				</div>
                
			</div>
		
			
			
			
			
		</div>
		
		
	</div>
	
	<div id="footer">
		<div id="footer_inner">
	
       
				<center><p>Copyright &copy; 2013  Multiinnovate Technologies Pvt Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies Pvt Ltd.</a></p></center>
		
		
	
		</div>
	</div>
	
</body>
</html>
