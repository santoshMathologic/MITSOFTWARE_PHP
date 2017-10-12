<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
<script type="text/javascript" src="js/behaviour.js"></script>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  

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
				
			</div>
			<div id="menus_wrapper">
			<div id="main_menu">
					<ul>
							 <li><a href="home.php"><span><span>Home</span></span></a></li>
                       		 <li><a href="monthlyview.php" class="selected"><span><span>Expenses</span></span></a></li>
                             <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						     <li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
					 	     <li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						     <li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        	 <li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						     <li><a href="reminders.php"><span><span>Reminder's</span></span></a></li>
                             <li><a href="DocumentView.php" ><span><span>Document's</span></span></a></li> 
                        
					</ul>
				</div>
				
				
				
				
			</div>
		</div>
  <div id="content">
			<div id="page">
				<div class="inner">
					
					
					
					
					<div class="section">
						
						<div class="title_wrapper">
							<h2 style="margin-left:450px;">EXPENSES INFORMATION</h2>
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
												<form action="" method="" class="search_form general_form" >
													<fieldset>
														<div class="forms">
                                                        
                                                        
                             <div class="row">
							<div class="inputs">

       
                                            </div>
											</div>


									<div class="row">
									<div class="inputs">

								 </div>
								 </div>              
                                 
     												                                                 
							<?php
							include ("includes/db_con.php");
							{
							checkAdminSession();
							if(isset($_POST['submit']))
							{
								$From=$_POST['from'];
						 		$To= $_POST['to'];
							
							$query = "SELECT *FROM  MONTHLYEXP WHERE date BETWEEN '$From' AND '$To' ORDER BY date";
							$res = mysql_query($query);
							$num_rows = mysql_num_rows($res);
							if($num_rows>=1)
							{
							echo"<table id='table_struct' border='1' bordercolor='7BA4B1' cellspacing='1' cellpadding='1' bgcolor='#FFFFFF' width='1024px' ><tr class='tr_class'>
							<th align='center' >Date</th>
							<th align='center' >Salary Details</th>
							<th align='center' >Rent</th>
   							<th align='center' >Water</th>
							<th align='center' >Internet</th>
							<th align='center' >Phone Bill</th>
							<th align='center' >News Paper</th>
							<th align='center' >E-Bill</th>
							<th align='center' >Cleaning</th>
							<th align='center' >Other Expenses</th>
							<th align='center' >Remarks</th>
							<th align='center' >Total</th>
							</tr>";
								while($row = mysql_fetch_array($res))
								{
									 
										echo"<tr class='tr_class1'>
										<td align='center'>".$row['date']."</td>
										<td align='center'>".$row['salary']."</td>
										<td align='center'>".$row['rent']."</td>
										<td align='center'>".$row['water']."</td>
										<td align='center'>".$row['internet']."</td>
										<td align='center'>".$row['phonebill']."</td>
										<td align='center'>".$row['newspaper']."</td>
										<td align='center'>".$row['ebill']."</td>
										<td align='center'>".$row['cleaning']."</td>
										<td align='center'>".$row['otherexpenses']."</td>
										<td align='center'>".$row['Remarks']."</td>
										
										<td align='center'>".$row['total']."</td>";
										
									echo "</tr>";
								}
							}
								echo "</table>";
							}
						
							else	{
								echo "<table  bordercolor='7BA4B1' cellspacing='1' cellpadding='1' bgcolor='#FFFFFF' width:auto;
            max-width:'100%' cellspacing='1' cellpadding='1'><tr class='tr_class'><td>No Record Found!!</td></tr></table>";
								}
							}	
						 	?><br /><br />                                           
                                                        
                                                                   					
														<div class="row">
															<div class="buttons">
																
																
																<ul>
         <li>
         <span class="button send_form_btn"><span><span><a href="monthlyexpenses.php"><font color="#FFFFFF">ADD</font></a></span></span></span>
         </li>
          <li>
         <span class="button send_form_btn"><span><span><a href="monthlyedit.php"><font color="#FFFFFF">UPDATE</font></a></span></span></span>
         </li>
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
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
						<li><a href="reminders.php"><span><span>Reminder's</span></span></a></li> 
                        <li><a href="DocumentView.php" ><span><span>Document's</span></span></a></li>                              
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

