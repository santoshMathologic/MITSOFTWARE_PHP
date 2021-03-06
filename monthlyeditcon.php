<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />

<!--[if lte IE 6]><link media="screen" rel="stylesheet" type="text/css" href="css/admin-ie.css" /><![endif]-->

<!--calendar-->

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
     <script> 
   
        $(function()
	       {  
        $( "#from" ).datepicker({  
            defaultDate: "+1d",  
            changeMonth: true,  
            changeYear: true,  
            numberOfMonths: 1, 
			showOn: "button",
		    buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
		    
        });  
        var currentDate = new Date();  
        $("#from").datepicker("setDate",currentDate);  
          
        $("#from").datepicker("option",{  
            dateFormat: 'mm/dd/yy',  
            showOn: "button",  
        });  
          
          
        $( "#to" ).datepicker({  
            defaultDate: "+1d",  
            changeMonth: true,  
            changeYear: true,  
            numberOfMonths: 1,  
		    buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
			showOn: "button",
            onSelect: function( selectedDate )
			{  
                $( "#from" ).datepicker( "option", "maxDate", selectedDate );  
            }  
        });  
          
        var currentDate = new Date();  
        $("#to").datepicker("setDate",currentDate);  
          
        $("#to").datepicker("option",{  
            dateFormat: 'mm/dd/yy',  
            showOn: "button",  
        });  
          
          
    });  
    </script>
<script type="text/javascript" src="js/behaviour.js"></script>
</head>
<?php
include "includes/db_con.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query = "select * from monthlyexp where id=$id";
$res = mysql_query($query);
$row = mysql_fetch_array($res);
$date =  $row['date'];
$salary = $row['salary'];
$rent = $row['rent'];
$water = $row['water'];
$internet = $row['internet'];
$phonebill = $row['phonebill'];
$newspaper = $row['newspaper'];
$ebill = $row['ebill'];
$cleaning = $row['cleaning'];
$otherexpenses = $row['otherexpenses'];
$Remarks =  $row['Remarks'];
$total = $row['total'];
}
?>
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
							<li class="last"><a href="index.php">Log out</a></li>
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
						 <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                        <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php" class="selected"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        <li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li> 
                        <li><a href="DocumentView.php"><span><span>Document's</span></span></a></li>
                        
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
							<h2 style="margin-left:450px;"> MONTHLY EXPENSES</h2>
							
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
												
												
												<!--[if !IE]>start forms<![endif]-->
												<form action="monthlyeditcontent.php?id=<?php echo $id?>" method="post">

													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														
                                                   
														<!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Date:</label>
													<div class="inputs">
                                                    
												  <span class="input_wrapper"><input class="text" name="date" type="text" id="from" value="<?php echo $date ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                      
                                                        
                                                        	<!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Salary Details:</label>
													<div class="inputs">
												  <span class="input_wrapper"><input class="text" name="salary" type="text" value="<?php echo $salary ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        
                                                        	<!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Rent:</label>
													<div class="inputs">
												  <span class="input_wrapper"><input class="text" name="rent" type="text" value="<?php echo $rent ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Water:</label>
													<div class="inputs">
											  <span class="input_wrapper"><input class="text" name="water" type="text"  value="<?php echo $water ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Internet:</label>
													<div class="inputs">
										 <span class="input_wrapper"><input class="text" name="internet" type="text"  value="<?php echo $internet ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>PhoneBill:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="phonebill" type="text"  value="<?php echo $phonebill ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>NewsPaper:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="newspaper" type="text"  value="<?php echo $newspaper ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>E-Bill:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="ebill" type="text"  value="<?php echo $ebill ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Cleaning:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="cleaning" type="text"  value="<?php echo $cleaning ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>OtherExpenses:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="otherexpenses" type="text"  value="<?php echo $otherexpenses ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
													
                                                    
                                                                    <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Remarks:</label>
													<div class="inputs">
							         <span class="input_wrapper">
                             	
                                                <textarea name="Remarks" cols="25" rows="5" ><?php echo $Remarks ?></textarea>
                                                </span>
                                                
                              
												
												   </div>
											</div>
													
                                                    
                                                    
                                                    	<!--[if !IE]>end row<![endif]-->
                                                        
                                                          <!--[if !IE]>start row<![endif]-->
											<div class="row">
													<label>Total:</label>
													<div class="inputs">
							 <span class="input_wrapper"><input class="text" name="total" type="text"  value="<?php echo $total ?>"/></span>
												<!--<span class="system positive">This is a positive message</span>-->
												   </div>
											</div>
														<!--[if !IE]>end row<![endif]-->
                                                      
                                                  
                                                        
                                                                   					<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<div class="buttons">
																
																
																<ul>
                                                                <br />
                                                                <br />
                                                                
		<li><span class="button send_form_btn"><span><span>SAVE</span></span> <input type="submit" name="sub" value="Update Post" /> </span></li>
			<!--<li><span class="button send_form_btn"><span><span><a href="index.php"><font color="#FFFFFF">HOME</font></a></span></span></span></li> -->
            <li><span class="button send_form_btn"><span><span><a href="monthlyexpenses.php"><font color="#FFFFFF">BACK</font></a></span></span></span></li>
													 						
									</ul>
																
																
																
																
																       
															</div>
														</div>
														<!--[if !IE]>end row<![endif]-->
														
														</div>
														<!--[if !IE]>end forms<![endif]-->
														
													</fieldset><br /><br />
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
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        <li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li> 
                        <li><a href="DocumentView.php"><span><span>Document's</span></span></a></li>
                             
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
							
							<img src="images/chitfundside.jpg"/>
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

