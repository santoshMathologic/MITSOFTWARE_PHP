<?php
include ("includes/db_con.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Employee Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />

<!--[if lte IE 6]><link media="screen" rel="stylesheet" type="text/css" href="css/admin-ie.css" /><![endif]-->

<!--calendar-->
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

<body onLoad="digital_clock()">
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
							<li class="last"><a href="index.php">Log out</a></li>
                            
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
				
				<!--[if !IE]>end user details<![endif]-->
				
				
				
			</div>
			
			<!--[if !IE]>end logo end user details<![endif]-->
			
			
			
			<!--[if !IE]>start menus_wrapper<![endif]-->
			<div id="menus_wrapper">
				
				
				
				
				
			  <div id="main_menu">
					<ul>
						<li><a href="emphome.php"><span><span>Home</span></span></a></li>
                        <li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php"><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php"><span><span>Attandance Management</span></span></a></li> 
                        <li><a href="AttandanceView.php" class="selected"><span><span>Attandance View</span></span></a></li>   
                       
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
							<h2 style="margin-left:450px;">ATTANDANCE INFORMATION</h2>
							
							<!--[if !IE]>start section menu<![endif]-->
							<ul class="section_menu">
							</ul>
							<!--[if !IE]>end section menu<![endif]-->
							
							
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>

				  <div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
												
												
												<!--[if !IE]>start forms<![endif]-->
												<form action="AttandanceSearch.php" method="" class="search_form general_form" method="post">
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
					<div class="forms">
					 <div class="row">
					 <div class="inputs">
                     
                     		 <?php
							 				
											$query = "SELECT * FROM member_details";
											$result = mysql_query ($query);
											echo "<label>Employee Code:</label>";
											echo "<select name='EMP_CODE' value='' style='float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid 				#CECECE;'><option value='default'>SELECT</option>";
											while($row = mysql_fetch_array($result)) 
											{
											 echo "<option value=".$row['code'].">".$row['code']."</option>"; 
 											}
								echo "</select>";
								
		
		?>
		<span class="button send_form_btn"><span><span>SEARCH</span></span><input name="submit" type="submit" value="submit" /></span>
        <!--<span class="button send_form_btn"><span><span><a href="#"><font color="#FFFFFF">SEARCH</font></a></span></span></span> -->
                                        </div>
                                        </div>
                  
                  		<?php
							{
							
							$query = "SELECT * from  Emp_Attandance_Report";
							$res = mysql_query($query);
							$num_rows = mysql_num_rows($res);
								if($num_rows>=1)
								{
							echo"<table id='table_struct' border='1' width='700' cellspacing='1'  bordercolor='7BA4B1'  bgcolor='#FFFFFF' ><tr class='tr_class'>
							<td align='center' style='font-weight:bold'>Id</td>
							<td align='center' style='font-weight:bold'>Date</td>
							<td align='center' style='font-weight:bold'>Emp Code</td>
							<td align='center' style='font-weight:bold'>Emp Name</td>
							<td align='center' style='font-weight:bold'>Emp Desig</td>
   							<td align='center' style='font-weight:bold'>Time-In</td>
							<td align='center' style='font-weight:bold'>Time-Out</td>
							<td align='center' style='font-weight:bold'>Remarks</td>
							</tr>";
								while($row = mysql_fetch_array($res))
								{
									    $id = $row['id'];
										echo"<tr class='tr_class1'>
										<td align='center'>".$row['id']."</td>
										<td align='center'>".$row['date']."</td>
										<td align='center'>".$row['Emp_Code']."</td>
										<td align='center'>".$row['Emp_Name']."</td>
										<td align='center'>".$row['Emp_Designation']."</td>
										<td align='center'>".$row['Time_In']."</td>
										<td align='center'>".$row['Time_Out']."</td>
										<td align='center'>".$row['remark']."</td>";
										
									echo "</tr>";
								}
								echo "</table>";
							}
							else	{
								echo "<table  width='100%' cellspacing='1' cellpadding='1'><tr class='tr_class'><td>No Record Found!!</td></tr></table>";
								}
								
							}
							mysql_close($con);
						 	?><br /><br />                                           
                                            
                                 
                            
                            
                            
                 
                                                   
				                                  					<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<div class="buttons">
																
																
																<ul>
                                                                
                                                                	
																<ul>
         
         <li><span class="button send_form_btn"><span><span><a href="AttandanceSheet.php"><font color="#FFFFFF">ADD</font></a></span></span></span></li> 
         <li><span class="button send_form_btn"><span><span><a href="EmployeeAttandanceExport.php"><font color="#FFFFFF">EXPORT</font></a></span></span></span></li> 
         
		</ul>
                                                                
       <!--                                                         
                                                                
	     <li><span class="button send_form_btn"><span><span><a href="salary.php"><font color="#FFFFFF">BACK</font></a></span></span></span></li>
		</ul>
        -->
																
																
																
																
																       
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
                       <li><a href="emphome.php"><span><span>Home</span></span></a></li>
                        <li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" ><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php"><span><span>Attandance Management</span></span></a></li> 
                        <li><a href="AttandanceView.php" ><span><span>Attandance View</span></span></a></li>   
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

