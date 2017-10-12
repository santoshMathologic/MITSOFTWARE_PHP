<?php
session_start();
include ("includes/db_con.php");
checkAdminSession();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
   $(function()
	       {  
        $("#datepicker" ).datepicker({  
            defaultDate: "+1d",  
            changeMonth: true,  
            changeYear: true,  
            numberOfMonths: 1, 
			showOn: "button",
		    buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
			
            onSelect:function( selectedDate ) {  
                $( "#datepicker" ).datepicker( "option", "minDate", selectedDate );  
            }  
        });
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

<body onLoad="digital_clock()">
	
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
			<div id="menus_wrapper">
			  <div id="main_menu">
					<ul>
								<li><a href="home.php"><span><span>Home</span></span></a></li>
                        		<li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                             	<li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
								<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						    	<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
								<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        		<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
								<li><a href="reminders.php" class="selected"><span><span>Reminder's</span></span></a></li>
                         		<li><a href="DocumentView.php"><span><span>Document's</span></span></a></li>   
                        
					</ul>
				</div>
				
				
				
				
			</div>
		
			
			
			
		</div>
		
		
		
  <div id="content">
			<div id="page">
				<div class="inner">
					<div class="section">
					
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">Reminders</h2>
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
												<form action="remin.php" method="post" class="search_form general_form">
													<fieldset>
											<div class="forms">
														
											<div class="row">
													
													<div class="inputs">
                                                    <label>Date:</label>
												<input name="date" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="datepicker" />
											
												   </div>
											</div>
											<div class="row">
												<div class="inputs">
                                                    <label>Month:</label>
												<input name="month" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="month" />
											
												   </div>
											</div>
											
                                                        
                                                        
                                            
											<div class="row">
											<div class="inputs">
                                            <label>Year:</label>
												<input name="year" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="year" />
												
											  </div>
											</div>
											<div class="row">
													
													<div class="inputs">
                                                    <label>Email:</label>
                               <input name="email" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="email" />
												
												   </div>
											</div>
														
                                                        
                                                        
											<div class="row">
													
													<div class="inputs">
                                                    <label>Details:</label>
													<span class="inline">
                                                <textarea name="details" cols="25" rows="5"></textarea></span>
												
												   </div>
											</div>
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                  <div style="float:left">
                                                                                                                             </div>
                                                        
                                                                   					
														<div class="row">
															<div class="buttons">
																
																
																<ul>
		<li><span class="button send_form_btn"><span><span>SAVE</span></span><input name="submit" type="submit" /></span></li>
       <!-- <li><span class="button send_form_btn"><span><span><a href="home.php"><font color="#FFFFFF">HOME</font></a></span></span></span></li> -->
			
													
									</ul>
																
																
																
																
																       
															</div>
														</div>
														
														
														</div>
														
														
													</fieldset>
													
													
													
													
													
									        </form>
												<!--[if !IE]>end forms<![endif]-->	
											
												
												
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
					
					
						
				</div>
			</div>
			<!--[if !IE]>end page<![endif]-->
			<!--[if !IE]>start sidebar<![endif]-->
			<div id="sidebar">
				<div class="inner">
				
				
					<!--[if !IE]>start calendar<![endif]-->
				
					<!--[if !IE]>end calendar<![endif]-->
					
					
					
					
					<!--[if !IE]>start section<![endif]-->	
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
                        <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                           <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li> 
                         <li><a href="Documents.php"><span><span>Document's</span></span></a></li>                                
                                                   </ul>
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
					
				<!--[if !IE]>start section content top<![endif]-->
					<div class="section_content">
							
							<img src="images/chitfundside.png"/>
						</div>
					<!--[if !IE]>end section<![endif]-->
				
				
				</div>
			</div>
			<!--[if !IE]>end sidebar<![endif]-->
			
			
			
			
		</div>
		<!--[if !IE]>end content<![endif]-->
		
	</div>
	<!--[if !IE]>end wrapper<![endif]-->
	
	<!--[if !IE]>start footer<![endif]-->
	<div id="footer">
		<div id="footer_inner">
	
			<center><p> Copyright &copy; 2013  Multiinnovate Technologies Pvt Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies Pvt Ltd.</a></p></center>
	
		</div>
	</div>
	<!--[if !IE]>end footer<![endif]-->
	
</body>
</html>

