
<?php
	       include ("includes/db_con.php");
		   checkAdminSession();
	       $Code=$_REQUEST['code'];
		   $query = "SELECT *from member_details WHERE code='$Code'";
	       $res=mysql_query($query);
	       $row=mysql_fetch_object($res);   
		   $Name=$row->first_name;
		   $Code=$row->code;
		   $Des=$row->designation;
		 //  header("location:timeshet.php?code=$Code");
		  

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Employee Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
<script type="text/javascript" src="js/TimesheetChangePasswordVali.js"></script>

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
								
								$file = fopen("time.txt", "r") or exit("Unable to open file!");
								while(!feof($file))
							      {
								     echo fgets($file). "<br>";
							       }
								  fclose($file);

								
						      
										/*$lines = file("time.txt");
										$NumberofLines = array_slice(array_reverse($lines),0,5);
										 
										foreach($NumberofLines as $line)
											{
												    echo $line. "<br/>";
													 
											}
										fclose($Handle);
								*/
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
						<li><a href="emphome.php"><span><span>Home</span></span></a></li>
                        <li><a href="timeshet.php"><span><span>Enter Timesheet</span></span></a></li>
                        <li><a href="TimeSheetChangePass.php" class="selected"><span><span>Change Password</span></span></a></li>
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
							<h2 style="margin-left:450px";> CHANGE PASSWORD INFORMATION</h2>
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
												
												
		
  <form name="frm1" action="timesheetChangePassword.php" method="post" onsubmit="return ChangePasswrd('frm1')" class="search_form general_form">

		
		<fieldset>
		
			<div class="forms">
             <div style="width:400px;float:left">
                <div class="row">
				     <div class="inputs">
                    <label>Code</label>
                    <input type="text" id="ECode" name="ECode" class="input_wrapper" style="float:left; width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;" />
                            <label id="ECode"></label>
					   </div>
				</div>			
                
                
                <div class="row">
				     <div class="inputs">
                    <label>Current Password</label>
                    <input type="password" id="oldpass" name="oldPassword" class="input_wrapper" style="float:left; width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                            <label id="oldpasswrd"></label>
					   </div>
				</div>							        
                                            
               <div class="row">                           
               	  
					   <div class="inputs">						
                        <label>New Password</label>
                    <input type="password" id="NewPass" name="NewPass" class="input_wrapper" style="float:left; width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                            <label id="NewPass"></label>
						  
			   </div> 
              	</div>
               	                                          
               
				<div class="row">
					
				       <div class="inputs">
                    <label>Confirm Password</label>
                    <input type="password" id="confirmPass" name="confirmPass" class="input_wrapper" style="float:left; width:191px;margin: 0 8px 0 0;padding: 2px 5px;  border:1px solid #CECECE;"/>
                            <label id="confirmPass"></label>
						</div>		
                        					
				</div>									
				
				
                <div class="row">                                          
                   <div class="buttons">
					  <span id="Display"></span>                                  	
						<ul>							
		<li><span class="button send_form_btn"><span><span>Submit</span></span><input name="submit" type="submit" /></span></li>						
       
        
       
        						
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
	
	</body>
</html>

