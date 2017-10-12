<?php
session_start();
include ("includes/db_con.php");
checkAdminSession();
	$query="SELECT * FROM monthlyexp";
	$res = mysql_query($query);
	if(mysql_num_rows($res)>0)
	{
		$salary = $row['salary'];
		$id=$_GET['id'];
		$row = mysql_fetch_array($res);
	
		
	}
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
        $( "#datepicker" ).datepicker({  
            defaultDate: "+1d",  
            changeMonth: true,  
            changeYear: true,  
            numberOfMonths: 1, 
			showOn: "button",
		    buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
			
            onSelect: function( selectedDate ) {  
                $( "#datepicker" ).datepicker( "option", "minDate", selectedDate );  
            }  
        });
	});
		
  </script>
<script type="text/javascript" language="javascript">
function autocalc(oText)
{
if (isNaN(oText.value)) //filter input
{
oText.value = '';
}
var field, val, oForm = oText.form, total = a = 0;
for (a; a < arguments.length; ++a) //loop through text elements
{
field = arguments[a];
val = parseFloat(field.value); //get value
if (!isNaN(val)) //number?
{
total += val; //accumulate
}
}
oForm.total.value = total; //out
}
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
				
				
							
							</div>
			
			
									
			<div id="menus_wrapper">
				
			  <div id="main_menu">
					<ul>
						<li><a href="home.php"><span><span>Home</span></span></a></li>
                        <li><a href="monthlyview.php" class="selected"><span><span>Expenses</span></span></a></li>
                        <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientdetails.php"><span><span>Client Details</span></span></a></li>
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
					
					<div class="section">
						
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">EXPENSE INFORMATION</h2>
							
						
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
												
												
												
                                  <form name="frm1" action="month.php" method="post" onsubmit="return validate('frm1')" class="search_form general_form">

													
						<fieldset>
							
						<div class="forms">
						<div style="width:400px;float:left">
                         					<div class="row">
											<div class="inputs">
<label>Date:</label> <input name="date" class="input_wrapper" type="text" id="datepicker" readOnly class="input_wrapper" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;border:1px solid #CECECE;" />												   											
                            				</div>
											</div>
												
							<div class="row">
							<div class="inputs">
							<label>Salary</label>
                          <input class="input_wrapper" style="float:left;width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t1" name="salary" type="text" onkeyup="return autocalc(this)" value="<?php echo $salary ?>"/>
                                             
                                            </div>
											</div>
												
											<div class="row">
											<div class="inputs"> 
                                            <label>Rent:</label>
       										<input id="t2" name="rent" type="text" onkeyup="return autocalc(this,t1)" class="input_wrapper" style="float:left;width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                                            </div>
											</div>
                                            
                                            
                                            
												
                                                        
                                                          
                                                
											<div class="row">
											<div class="inputs">
                                                    <label>Water:</label>
												   <input id="t3" class="input_wrapper" style="float:left;width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" name="water" type="text" onkeyup="return autocalc(this,t1,t2)"/>
                                                  
										    </div>
											</div>
												
                                                        
                                                        
                                                         
                                                     
											<div class="row">
											<div class="inputs">
                                               <label>Internet:</label>
						   					   <input class="input_wrapper" style="float:left;width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t4" name="internet" type="text" onkeyup="return autocalc(this,t1,t2,t3)"/>
                                                  
											
									        </div>
											</div>
														
											<div class="row">
											<div class="inputs">
                                             <label>Phone Bill:</label>
												  
                                                  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t5" name="phonebill" type="text" onkeyup="return autocalc(this,t1,t2,t3,t4)"/>
                                            
                                            </div>
											</div>
												
											<div class="row">
											<div class="inputs">
                                            <label>News Paper:</label>
											<input class="input_wrapper" style="float:left;width:191px;float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t6" name="newspaper" type="text" onkeyup="return autocalc(this,t1,t2,t3,t4,t5)"/>
                          					
											</div>
											</div>
														
											<div class="row">
											<div class="inputs">
                                                    <label>E-Bill:</label>
												    <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t7" name="ebill" type="text" onkeyup="return autocalc(this,t1,t2,t3,t4,t5,t6)"/>
                                            </div>
											</div>
													
											<div class="row">
											<div class="inputs">
                                                    <label>Maintenance:</label>
												  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t8" name="cleaning" type="text" onkeyup="return autocalc(this,t1,t2,t3,t4,t5,t6,t7)"/>
                                                  
												
												   </div>
											</div>
												
                                                        
                                                
											<div class="row">
												
													<div class="inputs">
                                                    <label>Expenses:</label>
												 
                                             <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" id="t9" name="otherexpenses" type="text" onkeyup="return autocalc(this,t1,t2,t3,t4,t5,t6,t7,t8)"/>
                                                 
											
												   </div>
											</div>
                                            
                                            <div class="row">
												
													<div class="inputs">
                                                    <label>Remarks:</label>
												  <span class="inline">
                                                <textarea name="Remarks" cols="25" rows="5"></textarea>
                                           
                                                  </span>
											
												   </div>
											</div>
                                            
                                            
                                            
											
											<div class="row">
											
													<div class="inputs">
                                                   	<label>Total:</label>
												  
                                                  <input class="input_wrapper" style="float:left;width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"  name="total" type="text"  />
                                                  <br/><br/><br/>
												
												   </div>
											     </div>
												</div>
                                                        
                                                                                                               
                                                
														<div class="row">
															<div class="buttons">
																<span id="Display"></span>

																
	
    
    
    															<ul>
		<li>
        <span class="button send_form_btn"><span><span>Save</span></span><input name="submit" type="submit" /></span>
        </li>
<!----
		<li>
<span class="button send_form_btn"><span><span>View</span></span><input name="button" type="" onClick="window.location='monthlyview.php'"/>
</span>
</li>
---->										
		<li><span class="button send_form_btn"><span><span>View</span></span><input name="button" type="" onClick="window.location='monthlyview.php'"/></span></li>						</ul>
																
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
                        <li><a href="monthlyexpenses.php" class="selected"><span><span>Expenses</span></span></a></li>
                          <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientdetails.php"><span><span>Client Details</span></span></a></li>
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
							
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							
							
						</div>
						
					</div>
					
					
				
					<div class="section_content">
							
							<img src="images/chitfundside.png"/>
						</div>
				
				
				
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

