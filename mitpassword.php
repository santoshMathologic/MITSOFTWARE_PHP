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
						<li><a href="home.php"><span><span>Home</span></span></a></li>
                         <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                         <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						 <li><a href="passview.php" class="selected"><span><span>MIT Account</span></span></a></li> 
						 <li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        <li><a href="addemployee.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li>
                        <li><a href="Documents.php"><span><span>Document's</span></span></a></li>
                        
					</ul>
				</div>
			</div>
		</div>
  <div id="content">
			<div id="page">
				<div class="inner">
					<div class="section">
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">MIT ACCOUNT INFORMATION</h2>
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
												
												
											
												<form action="mitpass.php" method="post" class="search_form general_form">
													
													<fieldset>
													
														<div class="forms">
														
                                                   
													
											<div class="row">
											<div class="inputs">
                                            <label>Domain Name:</label>
											<input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="domainname" type="text" />
											</div>
											</div>
												
                                                      
                                                        
                                                
											<div class="row">
												<div class="inputs">
                                                 <label>WebHost:</label>
												 <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="webhost" type="text" /></span>
											
                                            </div>
											</div>
											<div class="row">
											<div class="inputs">
                                            <label>User Name:</label>
											<input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="username" type="text" />
											</div>
											</div>
									      <div class="row">
										<div class="inputs">
                                        <label>Password:</label>
										<input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="password" type="password" />
												
												   </div>
											</div>
											<div class="row">
											<div class="inputs">
                                            <label>Details:</label>
											<span class="inline">
                                                <textarea name="details" cols="25" rows="5"></textarea></span><br/><br/><br/>
											</div>
											</div>
											<div class="row">
											<div class="buttons">
											<ul>
		<li><span class="button send_form_btn"><span><span>Save</span></span><input name="submit" type="submit" /></span></li>
		<li><span class="button send_form_btn"><span><span>View</span></span><input name="button" type="" onClick="window.location='passview.php'"/></span></li>										
		
        <!----
        <li><span class="button send_form_btn"><span><span>Update</span></span><input name="button" type="" onClick="window.location='passedit.php'"/></span></li>													
        
        ---->
									</ul>
																
																
																
																
																       
															</div>
														</div>
														
														
														</div>
														
														
													</fieldset>
									        </form>
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
                        <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                          <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php" class="selected"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="addemployee.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li>  
                        <li><a href="Documents.php"><span><span>Document's</span></span></a></li>
                                                   
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
			<center><p> Copyright &copy; 2013  Bharatham Chit Funds Pvt.Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies</a></p></center>
	
				</div>
			</div>
		</body>
	</html>

