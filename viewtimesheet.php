<?php
session_start();
include("includes/db_con.php");
checkAdminSession();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script type="text/javascript" src="js/behaviour.js"></script>
<style type="text/css">
#view_table
{
	float:left;
	width:733px;
	height:500px;
}
#TableStyle
{
	width: 733px;
	height:480px;

	overflow-y:scroll;
	font-size:14px;
	border-bottom-right-radius: 0.5em;
	border-top-right-radius: 0.5em;
	border-bottom-left-radius: 0.5em;
	border-top-left-radius: 0.5em;
	
}
#TableStyle table td 
{
	alignment-adjust:central;
	width:52px;
	
}
#TableStyle table th
{
	width:50px;
	alignment-adjust:central;
}
</style>
</head>

<body>
									<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
    
									<!--[if !IE]>start head<![endif]-->
		<div id="head">
			
									<!--[if !IE]>start logo and user details<![endif]-->
                                    
			<div id="logo_user_details">
				<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
                
									<!--[if !IE]>start user details<![endif]-->
                                    
					<div id="user_details">
						<ul id="user_details_menu">
							<li>Welcome <strong>Administrator</strong></li>
							<li>
								<ul id="user_access">
									<li class="last"><a href="logout.php">Log out</a></li>
                             	</ul>
							</li>
						
						</ul>
					</div>
				
									<!--[if !IE]>end user details<![endif]-->
							
			</div>
			
									<!--[if !IE]>end logo end user details<![endif]-->
									<!--[if !IE]>start menus_wrapper<![endif]-->
                                    
			<div id="menus_wrapper">
				
			  <div id="main_menu">
					<ul>
						<!--<li><a href="emphome.php"><span><span>Home</span></span></a></li> -->
                        <li><a href="viewtimesheet.php" class="selected"><span><span>View Timesheet</span></span></a></li>
						
					</ul>
			  </div>
		   </div>
           
										<!--[if !IE]>end menus_wrapper<![endif]-->
		</div>
												<!--[if !IE]>end head<![endif]-->
		
													<!--[if !IE]>start content<![endif]-->
                                    
  		<div id="content">
														<!--[if !IE]>start page<![endif]-->
			<div id="page">
				<div class="inner">
																<!--[if !IE]>start section<![endif]-->	
					<div class="section">
                    
                    
                    
					
                    
                    
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">View Timesheet</h2>
							
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
											<div class="">
                                            
                                            
																					<!--[if !IE]>start forms<![endif]-->
       										 <form name="frm1" action="" method="post" onsubmit="return validate('frm1')" class="search_form general_form">

																							<!--[if !IE]>start fieldset<![endif]-->
											<fieldset>
																							<!--[if !IE]>start forms<![endif]-->
										<div class="forms">
			 							        <div style="width:400px;float:left">
                                                 
              									</div>
                                                        
            																				<!--[if !IE]>start row<![endif]-->
											<div class="row">
												<div class="buttons">
													<span id="Display"></span>
												<ul>
                                               <!--
								<li><span class="button send_form_btn"><span><span>View Employee Status</span></span>
        						<input name="submit" type="submit" /></span></li>
													-->
                                                    </ul>
                                                    
												</div>
                                                
											</div>
																				<!--[if !IE]>end row<![endif]-->
										</div>
																				<!--[if !IE]>end forms<![endif]-->
											</fieldset>
																				<!--[if !IE]>end fieldset<![endif]-->
											</form>
																				<!--[if !IE]>end forms<![endif]-->	
                                                                                
                                                                                
										</div>
									</div>
								</div>
							</div>
						</div>
																			<!--[if !IE]>end section content top<![endif]-->
					<div id="view_table"><br />              
      
      <iframe frameborder="0" scrolling="auto" height="300" width="1000" src="ViewTimeData.php">
      </iframe>
      
      </div>											
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
						<li><a href="viewtimesheet.php"><span><span>View Timesheet</span></span></a></li>
						                     
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

