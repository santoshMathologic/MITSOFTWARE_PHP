<?php
include ("includes/db_con.php");
checkAdminSession();
?>
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
  
  <link rel="stylesheet" href="TimePickerJS/jquery.clockpick.1.2.9.css" />
  <script src="TimePickerJS/jquery.clockpick.1.2.9.js"></script>
  <script src="TimePickerJS/jquery.clockpick.1.2.9.min.js"></script>
  <script>
   $(function()
	       {  
        $("#datepicker" ).datepicker({  
            dateFormat: 'yy-mm-dd',
			changeMonth: true,
      		changeYear: true,
			yearRange: '1900:2200'
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
                    
                        <li><a href="emphome.php" ><span><span>Home</span></span></a></li>
						<li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" ><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php" class="selected"><span><span>Attandance Management</span></span></a></li> 
                    
                    
					</ul>
				</div>
				
				
				
				
			</div>
		
			
			
			
		</div>
		
		
		
  <div id="content">
			<div id="page">
				<div class="inner">
					<div class="section">
					
						<div class="title_wrapper">
							<h2 style="margin-left:450px";> ATTANDANCE INFORMATION</h2>
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
												<form action="AttandanceManagement.php" method="post" class="search_form general_form" name="frm1">
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
                                
                                          <?php
											$query = "SELECT * FROM member_details";
											$result = mysql_query ($query);
											echo "<label>Emp Code:</label>";
											echo "<select name='EMP_CODE' value='' style='float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid 				#CECECE;'><option value='default'>SELECT</option>";
											while($row = mysql_fetch_array($result)) 
											{
											 echo "<option value=".$row['code'].">".$row['code']."</option>"; 
 											}
								echo "</select>";
								
								?>                
                                        </div>
                                        </div>
                                        
                                        	<div class="row">
											<div class="inputs">
                                
                                          <?php
													$query = "SELECT first_name FROM member_details";
													$result = mysql_query ($query);
													echo "<label>Emp Name:</label>";
											echo "<select name='EMP_NAME' value='' style='float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid 				#CECECE;'><option value='default'>SELECT</option>";
											while($row = mysql_fetch_array($result)) 
											{
											 echo "<option value=".$row['first_name'].">".$row['first_name']."</option>"; 
 											}
								echo "</select>";
								
								?>                
                                        </div>
                                        </div>
                                            
                                           	<div class="row">
											<div class="inputs">
                                
                                          <?php
													$query = "SELECT designation FROM member_details";
													$result = mysql_query ($query);
													echo "<label>Designation:</label>";
											echo "<select name='EMP_DESI' style='float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid 				#CECECE;'><option value='default'>SELECT</option>";
											while($row = mysql_fetch_array($result)) 
											{
											 echo "<option value=".$row['designation'].">".$row['designation']."</option>"; 
 											}
								echo "</select>";
								
								?>                
                                        </div>
                                        </div>
                                            
                                               <div class="row">
											<div class="inputs">
                                            <label>Time-In:</label>
												<input name="Time-In" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text"  id="timePcker" />
												
											  </div>
											</div>
                                            
                                            
                                               <div class="row">
											<div class="inputs">
                                            <label>Time-Out:</label>
												<input name="Time-Out" class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" type="text" id="Time-Out" />
												
											  </div>
											</div>
                                            
                                            
                                            
											<div class="row">
				       						<div class="inputs">
				                       <label>Group type:</label>
							 						<select name="Group_type" id="Group_type" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;">
                                	<option value="default">SELECT </option>
									<option value="Training">Training</option>
                                	<option value="Java">Java</option>
									<option value="PHP">PHP</option>
                                    <option value="2D Animation">2D Animation</option>
                                	<option value="3D Animation">3D Animation</option>
                                    <option value="Html">Html</option>
                                    <option value="Marketing">Marketing</option>
                                	<option value="Graphic Designer">Graphic Designer</option>
                                    
                                    
								</select>                                
							
                    							   </div>
											</div>
														
                                                        
                                                        
											<div class="row">
													
													<div class="inputs">
                                                    <label>Remarks:</label>
													<span class="inline">
                                                <textarea name="Remarks" cols="25" rows="5"></textarea></span>
												
												   </div>
											</div>
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                  <div style="float:left">
                                                                                                                             </div>
                                                        
                                                                   					
														<div class="row">
															<div class="buttons">
																
																
																<ul>
		<li><span class="button send_form_btn"><span><span>SUBMIT</span></span><input name="submit" type="submit" /></span></li>
        <li><span class="button send_form_btn"><span><span><a href="AttandanceView.php"><font color="#FFFFFF">VIEW</font></a></span></span></span></li> 

       
			
													
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
                        
                        <li><a href="emphome.php" ><span><span>Home</span></span></a></li>
						<li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" ><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php" class="selected"><span><span>Attandance Management</span></span></a></li> 
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

