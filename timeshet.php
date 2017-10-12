
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
  
	<script type="text/javascript" src="TimePicker/jquery.timepicker.js"></script>
	<script type="text/javascript" src="TimePicker/main.js"></script></script>
    <link href="TimePicker/jquery.timepicker.css" rel="stylesheet" type="text/css" />

  
  <script type="text/javascript" src="js/TimeSheetValiadtion.js"></script>
  <script type="text/javascript" src="js/behaviour.js"></script>



  
    <script type="application/javascript">
  $(function()
	{
    $("#datepicker").datepicker({
								 dateFormat: 'yy-mm-dd',
								 changeMonth: true,
      							 changeYear: true,
								 yearRange: '1900:2200'
								});
	$( "#anim" ).change(function(){							
								
								
								});
	                      
  });
 
  </script>     
  <script type="text/javascript" language="javascript">
  
		function CalcTime()
			{		var start = end =0; 
	        		var diff = 0;
					start_Time = document.getElementById('T1').value;
					var SFirstTrims = start_Time.substring(0,2);
					var SSecondTrims = start_Time.substring(3,5);
					End_Time = document.getElementById('T2').value;	
					var EFirstTrims = End_Time.substring(0,2);
					var ESecondTrims = End_Time.substring(3,5);
					FirstDiff  = parseInt(EFirstTrims)-parseInt(SFirstTrims );
					SecondDiff = Math.abs(parseInt(ESecondTrims)-parseInt(SSecondTrims));
					var Diff   =  FirstDiff+   ":"   +SecondDiff;
					document.getElementById('dur').value=Diff; 				    
	      }
	
	</script>

 </head>
 <body >
	<div id="wrapper">
	
		<div id="head">
			
			
			<div id="logo_user_details">
				<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
				<div id="user_details">
					<ul id="user_details_menu">
						<li>Welcome <strong>
						<?php 
						 
									include ("includes/db_con.php");
							   		checkAdminSession();
									$Code=$_REQUEST['code'];
									if($Code!=null)
									{
									$EmpCode = $Code;
									$query = "SELECT *from member_details WHERE code='$EmpCode'";
							        $res=mysql_query($query) or die(mysql_error());
									$row=mysql_fetch_array($res);
									    $Name=$row['first_name'];
										$code=$row['code'];
										$Desi=$row['designation'];
										$File = "time.txt"; 
										$Handle = fopen($File, 'w');		 

										fwrite($Handle, $Name); 
										fwrite($Handle, $code); 
										fwrite($Handle, $Desi); 
										fclose($Handle); 
										
										
										
									}
									
									    $lines = file("time.txt");
										$NumberofLines = array_slice(array_reverse($lines),0,200);
										foreach($NumberofLines as $line)
											{
												    echo $line. "<br />";
											}
										fclose($Handle); 
						?>
                        
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
						<li><a href="emphome.php" ><span><span>Home</span></span></a></li>
                        <li><a href="timeshet.php" class="selected"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" ><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php"><span><span>Attandance Management</span></span></a></li>   
						
					</ul>
				</div>
			</div>
	</div>
  <div id="content">
	
			<div id="page">
				<div class="inner">
					<div class="section">
						
						<div class="title_wrapper">
							<h2 style="margin-left:450px";> TIMESHEET INFORMATION</h2>
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
												
												
		
  <form name="frm1" action="employeeaddtimeshet.php" method="post" onsubmit="return TimeValiadtion('frm1')" class="search_form general_form">

		
		<fieldset>
		
			<div class="forms">		
             <div style="width:400px;float:left">
                  <div class="row">
						<div class="inputs">
                        <label>Date:</label>
							<input name="date" class="input_wrapper" type="text" id="datepicker" readOnly style="float:left; width:191px;float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                            <div><label id="date1"></label></div>
						</div>
           	        </div>
				
                                                  
                <div class="row">
				   
					   <div class="inputs">
                       <label>Project Title:</label>
                                                
							<input name="Project_title" class="input_wrapper" type="text" id="Project_title" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                             <label id="title"></label>
							
					   </div>
		 	    </div> 
                <div class="row">
				   
					   <div class="inputs">
                       <label>Work Assigned By:</label>
                       		<input name="Work_Assigned" class="input_wrapper" type="text" id="Work_Assigned" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                            <label id="assigned"></label>
							<!--<span class="system positive">This is a positive message</span>-->
					   </div>
				</div>							        
                                            
               <div class="row">                           
               	  
					   <div class="inputs">	
                        <label>Work Status:</label>
                       		<input name="Work_Status" class="input_wrapper" type="text" id="Work_Status" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" />
                            <label id="status"></label>
						  
			   </div> 
               	                                          
               
				<div class="row"><br/>
					
				       <div class="inputs">
                       <label>Project type:</label>
							 	<select name="project_Type" id="project_Type" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;">
                                	<option>Select The Project</option>
									<option>Training</option>
                                	<option>Java</option>
									<option>PHP</option>
                                    <option>2D Animation</option>
                                	<option>3D Animation</option>
                                    <option>Html</option>
                                    <option>Marketing</option>
                                	<option>Graphic Designer</option>
                                    <option>Others</option>
                                    
								</select>                                
							 <label id="prj_type"></label>
                            	                             									
						</div>		
                        					
				</div>									
				
				<div class="row">					
                   
                       <div class="inputs">                                 	
                        <label>Task:</label>                                   
							<!--<span class="input_wrapper"> -->
	<input type="text" class="input_wrapper" name="task" id="task" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;">	
                                				
							<!--</span>	-->
                            <label id="task1"></label>					
										
                           
                        </div>                
                 </div>                       
				
				<div class="row">										
                    
						<div class="inputs">							    
                        <label>Start Time:</label> 
         
         <!--                
           <input id="Start_Picker" class="time" type="text" placeholder="" name="Start_Time" onclick="123.php" style="width:194px; float:left; margin: 0 8px 0 0;padding: 2px 4px;  border: 1px solid #CECECE;"/> -->                                                              									
           
           <!--
           <input class="Start_Time" type="text" name="Start_Time"  style="width:194px; float:left; margin: 0 8px 0 0;padding: 2px 4px;border:1px solid #CECECE;" />
           --->
          
          <select name="start_Time" id="T1" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;" onchange="CalcTime()"> 
           
          
           
           
           <option value="09:00 AM">09:00 AM</option>
           <option value="09:15 AM">09:15 AM</option>
           <option value="09:30 AM">09:30 AM</option>
           <option value="09:45 AM">09:45 AM</option>
           <option value="09:50 AM">09:50 AM</option>
           <option value="09:55 AM">09:55 AM</option>
           <option value="10:00 AM">10:00 AM</option>
           <option value="10:15 AM">10:15 AM</option>
           <option value="10:30 AM">10:30 AM</option>
           <option value="10:45 AM">10:45 AM</option>
           <option value="10:50 AM">10:50 AM</option>
           <option value="10:55 AM">10:55 AM</option>
           <option value="11:00 AM">11:00 AM</option>
           <option value="11:15 AM">11:15 AM</option>
           <option value="11:30 AM">11:30 AM</option>
           <option value="11:45 AM">11:45 AM</option>
           <option value="11:50 AM">11:50 AM</option>
           <option value="11:55 AM">11:55 AM</option>
           <option value="12:00 PM">12:00 PM</option>
           <option value="12:15 PM">12:15 PM</option>
           <option value="12:30 PM">12:30 PM</option>
           <option value="12:45 PM">12:45 PM</option>
           <option value="12:50 PM">12:50 PM</option>
           <option value="12:55 PM">12:55 PM</option>
           <option value="13:00 PM">13:00 PM</option>
           <option value="13:15 PM">13:15 PM</option>
           <option value="13:30 PM">13:30 PM</option>
           <option value="13:45 PM">13:45 PM</option>
           <option value="13:50 PM">13:50 PM</option>
           <option value="13:55 PM">13:55 PM</option>
           <option value="14:00 PM">14:00 PM</option>
           <option value="14:15 PM">14:15 PM</option>
           <option value="14:30 PM">14:30 PM</option>
           <option value="14:45 PM">14:45 PM</option>
           <option value="14:50 PM">14:50 PM</option>
           <option value="14:55 PM">14:55 PM</option>
           <option value="15:00 PM">15:00 PM</option>
           <option value="15:15 PM">15:15 PM</option>
           <option value="15:30 PM">15:30 PM</option>
           <option value="15:45 PM">15:45 PM</option>
           <option value="15:50 PM">15:50 PM</option>
           <option value="15:55 PM">15:55 PM</option>
           <option value="16:00 PM">16:00 PM</option>
           <option value="16:15 PM">16:15 PM</option>
           <option value="16:30 PM">16:30 PM</option>
           <option value="16:45 PM">16:45 PM</option>
           <option value="16:50 PM">16:50 PM</option>
           <option value="16:55 PM">16:55 PM</option>
           <option value="17:00 PM">17:00 PM</option>
           <option value="17:15 PM">17:15 PM</option>
           <option value="17:30 PM">17:30 PM</option>
           <option value="17:45 PM">17:45 PM</option>
           <option value="17:50 PM">17:50 PM</option>
           <option value="17:55 PM">17:55 PM</option>
           <option value="18:00 PM">18:00 PM</option>
           <option value="18:15 PM">18:15 PM</option>
           <option value="18:30 PM">18:30 PM</option>
           <option value="18:45 PM">18:45 PM</option>
           <option value="18:50 PM">18:50 PM</option>
           <option value="18:55 PM">18:55 PM</option>
           <option value="19:00 PM">19:00 PM</option>
           <option value="19:15 PM">19:15 PM</option>
           <option value="19:30 PM">19:30 PM</option>
           <option value="19:45 PM">19:45 PM</option>
           <option value="19:50 PM">19:50 PM</option>
           <option value="19:55 PM">19:55 PM</option>
           <option value="20:00 PM">20:00 PM</option>
           <option value="20:15 PM">20:15 PM</option>
           <option value="20:30 PM">20:30 PM</option>
           <option value="20:45 PM">20:45 PM</option>
           <option value="20:50 PM">20:50 PM</option>
           <option value="21:55 PM">21:55 PM</option>
           <option value="23:00 PM">23:00 PM</option>
          
           </select>
           
           
</div>
</div>








														
						<div class="row">
                  		<div class="inputs">             
                          <label>End Time:</label>
                          
<!--                          
<input id="T2" class="End_Time" type="text" name="End_Time" style="width:194px; float:left; margin: 0 8px 0 0;padding: 2px 4px;  border: 1px solid #CECECE;" onmouseup="return TimeCalc(this,T1);"/>


---->

<select name="End_Time" id="T2" style="float:left; height:22px; width:205px; float:left; margin: 0 8px 0 0;border:1px solid #CECECE;" onchange="CalcTime()"> 

           <option value="09:00 AM">09:00 AM</option>
           <option value="09:15 AM">09:15 AM</option>
           <option value="09:30 AM">09:30 AM</option>
           <option value="09:45 AM">09:45 AM</option>
           <option value="09:50 AM">09:50 AM</option>
           <option value="09:55 AM">09:55 AM</option>
           <option value="10:00 AM">10:00 AM</option>
           <option value="10:15 AM">10:15 AM</option>
           <option value="10:30 AM">10:30 AM</option>
           <option value="10:45 AM">10:45 AM</option>
           <option value="10:50 AM">10:50 AM</option>
           <option value="10:55 AM">10:55 AM</option>
           <option value="11:00 AM">11:00 AM</option>
           <option value="11:15 AM">11:15 AM</option>
           <option value="11:30 AM">11:30 AM</option>
           <option value="11:45 AM">11:45 AM</option>
           <option value="11:50 AM">11:50 AM</option>
           <option value="11:55 AM">11:55 AM</option>
           <option value="12:00 PM">12:00 PM</option>
           <option value="12:15 PM">12:15 PM</option>
           <option value="12:30 PM">12:30 PM</option>
           <option value="12:45 PM">12:45 PM</option>
           <option value="12:50 PM">12:50 PM</option>
           <option value="12:55 PM">12:55 PM</option>
           <option value="13:00 PM">13:00 PM</option>
           <option value="13:15 PM">13:15 PM</option>
           <option value="13:30 PM">13:30 PM</option>
           <option value="13:45 PM">13:45 PM</option>
           <option value="13:50 PM">13:50 PM</option>
           <option value="13:55 PM">13:55 PM</option>
           <option value="14:00 PM">14:00 PM</option>
           <option value="14:15 PM">14:15 PM</option>
           <option value="14:30 PM">14:30 PM</option>
           <option value="14:45 PM">14:45 PM</option>
           <option value="14:50 PM">14:50 PM</option>
           <option value="14:55 PM">14:55 PM</option>
           <option value="15:00 PM">15:00 PM</option>
           <option value="15:15 PM">15:15 PM</option>
           <option value="15:30 PM">15:30 PM</option>
           <option value="15:45 PM">15:45 PM</option>
           <option value="15:50 PM">15:50 PM</option>
           <option value="15:55 PM">15:55 PM</option>
           <option value="16:00 PM">16:00 PM</option>
           <option value="16:15 PM">16:15 PM</option>
           <option value="16:30 PM">16:30 PM</option>
           <option value="16:45 PM">16:45 PM</option>
           <option value="16:50 PM">16:50 PM</option>
           <option value="16:55 PM">16:55 PM</option>
           <option value="17:00 PM">17:00 PM</option>
           <option value="17:15 PM">17:15 PM</option>
           <option value="17:30 PM">17:30 PM</option>
           <option value="17:45 PM">17:45 PM</option>
           <option value="17:50 PM">17:50 PM</option>
           <option value="17:55 PM">17:55 PM</option>
           <option value="18:00 PM">18:00 PM</option>
           <option value="18:15 PM">18:15 PM</option>
           <option value="18:30 PM">18:30 PM</option>
           <option value="18:45 PM">18:45 PM</option>
           <option value="18:50 PM">18:50 PM</option>
           <option value="18:55 PM">18:55 PM</option>
           <option value="19:00 PM">19:00 PM</option>
           <option value="19:15 PM">19:15 PM</option>
           <option value="19:30 PM">19:30 PM</option>
           <option value="19:45 PM">19:45 PM</option>
           <option value="19:50 PM">19:50 PM</option>
           <option value="19:55 PM">19:55 PM</option>
           <option value="20:00 PM">20:00 PM</option>
           <option value="20:15 PM">20:15 PM</option>
           <option value="20:30 PM">20:30 PM</option>
           <option value="20:45 PM">20:45 PM</option>
           <option value="20:50 PM">20:50 PM</option>
           <option value="21:55 PM">21:55 PM</option>
           <option value="23:00 PM">23:00 PM</option>
          
           </select>
                 </div>
                 </div>                                
				
                <div class="row">							
                   
                       <div class="inputs">                
                        <label>Duration:</label>                         	  
						<input name="duration" class="input_wrapper" type="text" id="dur" style="float:left; width:191px; float:left; margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
            			</div>
				</div>
			    <div class="row">                      
                  
                      <div class="inputs">                      
                       <label>Remarks:</label>                   
							<textarea name="remarks" id="remarks" style="width:194px; float:left; margin: 0 8px 0 0;
    padding: 2px 4px;  border: 1px solid #CECECE; " cols="25" rows="5"></textarea>	
                            <label id="remark"></label>	
					 		
					  </div>							  
                 </div>                     
                                         
				</div>										
               
                <div class="row">                                          
                   <div class="buttons">
					  <span id="Display"></span>                                  	
						<ul>							
		<li><span class="button send_form_btn"><span><span>Submit</span></span><input name="submit" type="submit" /></span></li>
       
       
        <!--						
        <li><span class="button send_form_btn"><span><span><a href="TimeSheetChangePass.php"><font color="#FFFFFF">ChangePassword</font></a></span></span></span></li>
        -->
        
       
        						
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
                        <li><a href="emphome.php" class="selected"><span><span>Home</span></span></a></li>
						<li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" ><span><span>Change Password</span></span></a></li>
                        <li><a href="AttandanceSheet.php"><span><span>Attandance Management</span></span></a></li>   
						                     
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
	
			<center><p> Copyright &copy; 2013  Multiinnovate Technologies Pvt Ltd. All Rights Reserved . Design by &nbsp; <a href="http://www.multiinnovate.com" title="Multiinnovate Technologies" 
target="_blank">Multiinnovate Technologies Pvt Ltd.</a></p></center>
	
		</div>
	</div>
	<!--[if !IE]>end footer<![endif]-->
	</body>
</html>

