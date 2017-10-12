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
  $(function(){
    $("#datepicker").datepicker({
								 
								 dateFormat: 'yy-mm-dd',
								 changeMonth: true,
      							 changeYear: true,
								 yearRange: '1900:2200'
								 
								});
								
  });
  </script>
  <script type="text/javascript" language="javascript">
function autocalc(form)
{
  var income=parseFloat(form.t1.value)-parseFloat(form.t2.value)
  form.total.value=isNaN(income)?0:income
}
</script>
<script type="text/javascript" src="js/behaviour.js"></script>
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
								<li><a href="clientview.php" class="selected"><span><span>Client Details</span></span></a></li>
								<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        		<li><a href="addemployee.php"><span><span>Employee</span></span></a></li>
								<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li>
                        		<li><a href="Documents.php"><span><span>Document's</span></span></a></li>

                        
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
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">CLIENT DETAIL INFORMATION</h2>
							
							<!--[if !IE]>start section menu<![endif]-->
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
												
												<form action="client.php" class="search_form general_form" method="post">
												<fieldset>
												<div class="forms">
											    <div class="row">
												<div class="inputs">
                                                <label>Client Name:</label>
												<input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="clientname" type="text" />
												   </div>
											</div>
											<div class="row">
											<div class="inputs">
                                            <label>Site Name:</label>
											<input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="sitename" type="text" />
											</div>
											</div>
									       <div class="row">
											<div class="inputs">
                                            <label>Phone No.:</label>
												  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="phonenumber" type="text" />
												   </div>
											</div>
														
                                                        
                                                        
                                                          
                                                        	<!--[if !IE]>start row<![endif]-->
											<div class="row">
													
													<div class="inputs">
                                                    <label>Mail-Id:</label>
												  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="mailid" type="text" />
												   </div>
											     </div>
											<div class="row">
											<div class="inputs">
                                            <label>Total Amount:</label>
										    <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t1" name="totalamount" type="text" onkeyup="autocalc(this.form)" onchange="autocalc(this.form)"/>
												
											</div>
											</div>
											<div class="row">
													<div class="inputs">
                                                    <label>Advance Amount Paid:</label>
												  
                                                  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="advanceamountpaid" id="t2" type="text" onkeyup="autocalc(this.form)" onchange="autocalc(this.form)"/>
                                                  
												   </div>
											</div>
											<div class="row">
													<div class="inputs">
                                                    <label>Advance Amount Paid Date:</label>
													<input name="advanceamountdate" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="datepicker" />
												   </div>
											</div>
											<div class="row">
													<div class="inputs">
                                                    <label>Remaining Amount:</label>
												  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="total" type="text" />
												  </div>
											</div>
												<div class="row">
												<div class="buttons">
												<ul><br />
		<li><span class="button send_form_btn"><span><span>SAVE</span></span><input name="submit" type="submit" /></span></li>
		<li><span class="button send_form_btn"><span><span>VIEW</span></span><input name="button" type="" onClick="window.location='clientview.php'"/></span></li>										
		
        <!---
        <li><span class="button send_form_btn"><span><span>Update</span></span><input name="button" type="" onClick="window.location='clientedit.php'"/></span></li>													
        
        --->
															
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
						<li><a href="passview.php" class="selected"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="addemployee.php"><span><span>Employee</span></span></a></li>
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
	
			<center><p> Copyright &copy; 2013  Bharatham Chit Funds Pvt.Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies</a></p></center>
	
		</div>
	</div>
	<!--[if !IE]>end footer<![endif]-->
	
</body>
</html>

