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
							<li><a href="index.php"><span><span>Home</span></span></a></li>
                        	<li><a href="monthlyview.php"><span><span>Monthly Expenses</span></span></a></li>
                           	<li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
							<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
							<li><a href="clientview.php" class="selected"><span><span>Client Details</span></span></a></li>
							<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
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
							<h2 style="margin-left:450px;">CLIENT DETAIL INFORMATION</h2>
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
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														
                                                   
				<?php
						include ("includes/db_con.php");
						$id = $_REQUEST['id'];
						$query = "SELECT * FROM  clientdetails";
						$result= mysql_query($query);
						if(mysql_num_rows($result)>0)
							{
						
						echo"<table id='table_struct' border='1' bordercolor='7BA4B1' width='1024px' cellspacing='1' cellpadding='1' bgcolor='#FFFFFF'>
						<tr class='tr_class'>
						
						<th align='center'>Client Name</th>
						<th align='center'>Site Name</th>
						<th align='center'>PhoneNumber</th>
						<th align='center'>MailId</th>
						<th align='center'>Total Amount</th>
						<th align='center'>Advance Amount Paid</th>
						<th align='center'>Advance Amount Paid Date</th>
						<th align='center'>Remaining Amount</th>
						<th></th>
						<th></th>
						</tr>";

						while($row = mysql_fetch_array($result))
						  {
						 	    echo "<tr>";
						  		
						  		echo "<td align='center'>"  .$row['clientname'] . "</td>";
						  		echo "<td align='center'>"  .$row['sitename'] . "</td>";
						  		echo "<td align='center'>"  .$row['phonenumber'] . "</td>";
						  		echo "<td align='center'>"  .$row['mailid'] . "</td>";
						  		echo "<td align='center'>"  .$row['totalamount'] . "</td>";
						  		echo "<td align='center'>"  .$row['advanceamountpaid'] . "</td>";
						  		echo "<td align='center'>"  .$row['advanceamountdate'] . "</td>";
								  echo "<td align='center'>"  .$row['total'] . "</td>";
								  echo "<td><a style='cursor:pointer;color:#0099CC' href='clienteditcon.php?id=".$row['id']."'>Edit</a></td>";
								  $id=$row['id'];
								  echo "<td style='cursor:pointer;color:#0099CC'><a onclick='var con = confirm(\"R u sure?\"); if(con){window.location=\"clientdeletecontent.php?id=$id\"}'>Delete</a></td>";
						  echo "</tr>";
						  }
						echo "</table>";
						}
						else
						echo "No Records Found";
						mysql_close($con);
?>

<?php
if(isset($_GET['msg']))
echo "<script>alert('".$_GET['msg']."')</script>";
?><br/><br/>
                                                  
                                                        
                                                                   					<!--[if !IE]>start row<![endif]-->
														<div class="row">
															<div class="buttons">
																
																
																<ul>
		
        <!--
        <li><span class="button send_form_btn"><span><span><a href="clientdetails.php"><font color="#FFFFFF">BACK</font></a></span></span></span>	</li>
        
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
                        <li><a href="monthlyexpenses.php"><span><span>Monthly Expenses</span></span></a></li>
                           <li><a href="salary.php"><span><span>Salary</span></span></a></li>
						<li><a href="mitpassword.php" class="selected"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientdetails.php"><span><span>Client Details</span></span></a></li>
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

