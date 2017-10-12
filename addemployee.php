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
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
    <script type="text/javascript" src="js/behaviour.js"></script>
    <script type="text/javascript" src="js/EmployeeValidation.js"></script>
    <script type="text/javascript">
 
 $(function(){
    $("#datepicker").datepicker({
								 
								 dateFormat: 'yy-mm-dd',
								 changeMonth: true,
      							 changeYear: true,
								 yearRange: '1900:2200'
								 
								});
								
  });
  </script>
<script type="text/javascript" src="js/behaviour.js"></script>
<script type="text/javascript" src=""></script>
<!---<script type="text/javascript" src="js/AddEmpValiadtion.js"></script> -->


</head>

<body onload="document.frm1.EName.focus()">
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
                        <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                        <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followupview.php"><span><span>Followups</span></span></a></li>
                       	<li><a href="AddEmployeeView.php" class="selected"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li>
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
												
												
												
				<form name="frm1" action="emp.php" method="post" onsubmit="return EmpValidation('frm1')" class="search_form general_form">
                
                <fieldset>
                
              <div class="forms">		
              <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Employee Name:</label>
                     		<input name="EName" class="input_wrapper" type="text" id="uname" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EmpNameError"></label></div>
						</div>
           	      </div>
                  
                  
                  
                  
                  <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Employee Password:</label>
                     		<input name="EPassword" class="input_wrapper" type="password" id="Epass" style="float:left; width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EmpPassError"></label></div>
						</div>
           	      </div>
                  
                  <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Email-Id:</label>
                     		<input name="EMail" class="input_wrapper" type="text" id="EmailID" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EMID"></label></div>
						</div>
           	      </div>
                  
                  
                   <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Date-Of-Birth:</label>
                     		<input name="dob" class="input_wrapper" type="text" id="datepicker" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="DateError"></label></div>
						</div>
           	      </div>
                  
                
                 <div style="width:400px;float:left;"> 
                  <div class="row">
                  <div class="inputs">
                  <label >Gender</label>      
<input type="radio" id="ESex" name="Esex" value="M" style="float:left;margin-left:-2px;"/><label style="float:left;margin-left:10px;">Male</label>
<input type="radio" id="ESex" name="Esex" value="F" style="float:left; margin-left:-74px;"/><label style="float:left; margin-left:-50px;">Female</label>
              			<div><label id="EGender"></label></div>
					</div>
           	     </div> 
                  
                  <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Designation:</label>
                     		<input name="EDesignation" class="input_wrapper" type="text" id="Ebranch" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EDesi"></label></div>
						</div>
           	      </div>
                  
                  
                   <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Maritual Statues:</label>
                        
                        <select name="Marital_status" id="MMarried" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;">
                        <option value="default">Select</option>
                        <option value="Married">Married</option>
						<option value="Single">Single</option>
					   </select>
                            <div><label id="EMstatue"></label></div>
						</div>
           	      </div>
                
                  
				
                  <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Address:</label>
                        <textarea name="EAddress" id="EAdd" value="" cols="25" rows="5" class="input_wrapper" style="float:left; width:200px; height:70px; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"></textarea>
                     	<div><label id="EAddressError"></label></div>
						</div>
           	      </div>
                 
                
                  <div style="width:400px;float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Counrty:</label>
                        
                        <select name="country" id="ECountry" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;">
                        <option value="default">Select</option>
                        <option value="India">India</option>
						<option value="Afghanistan">Afghanistan</option>
                        <option value="Australia">Australia</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Finland">Finland</option>
                        <option value="Germany">Germany</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Japan">Japan</option>
                        <option value="Kenya">Kenya</option>
					   </select>
                            <div><label id="ECountryError"></label></div>
						</div>
           	      </div>
                
                
               
                
                <div style="width:400px; float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >States:</label>
                     		<input name="state" class="input_wrapper" type="text" id="EStates" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EStatesError"></label></div>
						</div>
           	      </div>
                  
                  
                  
                <div style="width:400px; float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >City:</label>
                     		<input name="city" class="input_wrapper" type="text" id="ECity" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="ECityError"></label></div>
						</div>
           	      </div>
                  
                  
                  <div style="width:400px; float:left;">
                  <div class="row">
						<div class="inputs">
                        <label >Pincode:</label>
                     		<input name="pin" class="input_wrapper" type="text" id="EPinCode" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EPinError"></label></div>
						</div>
           	      </div>
                  
                  
                    
                  <div style="width:400px; float:left;">
                  <div class="row">
						<div class="inputs">
                        <label > Mobile Number :</label>
                     		<input name="EMobileNumber" class="input_wrapper" type="text" id="EMobileNumberID" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" value=""/>
                            <div><label id="EMobileNumberError"></label></div>
						</div>
           	      </div>
                  
                  
               
                
                
                </fieldset>
               <br /> 
               
    <div class="row">
	<div class="buttons">
																
																
		<ul>
		<li><span class="button send_form_btn"><span><span>REGISTER</span></span> <input type="submit" name="submit" value="Register" /> </span></li>
			<li><span class="button send_form_btn"><span><span><a href="AddEmployeeView.php"><font color="#FFFFFF">VIEW</font></a></span></span></span></li>
    								</ul>
								</div>
							</div>
						<div style="margin-top:20px;margin-left:145px;">
    
    					</div>
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

