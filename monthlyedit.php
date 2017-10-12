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
						<li><a href="home.php"><span><span>Home</span></span></a></li>
                        <li><a href="monthlyview.php" class="selected"><span><span>Expenses</span></span></a></li>
                          <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
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
							<h2 style="margin-left:450px;">EXPENSE INFORMATION</h2>
							
							<!--[if !IE]>start section menu<![endif]-->
							<ul class="section_menu">
								
							</ul>
							
							
							
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
												<form action="" method="post" class="search_form general_form">
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														
                                                   
														<?php
include "includes/db_con.php";

$query = "select * from  monthlyexp";
$result= mysql_query($query);
if(mysql_num_rows($result)>0)
	{
echo"<table id='table_struct' border='1' bordercolor='7BA4B1' cellspacing='1' cellpadding='1' bgcolor='#FFFFFF' width='1024px' ><tr class='tr_class'>

<th align='center'>SNo</th>
<th align='center'>Date</th>
<th align='center'>Salary Details</th>
<th align='center'>Rent</th>
<th align='center'>Water</th>
<th align='center'>Internet</th>
<th align='center'>Phone Bill</th>
<th align='center'>News Paper</th>
<th align='center'>E-Bill</th>
<th align='center'>Cleaning</th>
<th align='center'>Other Expenses</th>
<th align='center'>Remarks</th>

<th align='center'>Total</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td align='center'>" . $row['id'] . "</td>";
  echo "<td align='center'>" . $row['date'] . "</td>";
  echo "<td align='center'>" . $row['salary'] . "</td>";
  echo "<td align='center'>" . $row['rent'] . "</td>";
  echo "<td align='center'>" . $row['water'] . "</td>";
  echo "<td align='center'>" . $row['internet'] . "</td>";
  echo "<td align='center'>" . $row['phonebill'] . "</td>";
  echo "<td align='center'>" . $row['newspaper'] . "</td>";
  echo "<td align='center'>" . $row['ebill'] . "</td>";
  echo "<td align='center'>" . $row['cleaning'] . "</td>";
  echo "<td align='center'>" . $row['otherexpenses'] . "</td>";
  echo "<td align='center'>" . $row['Remarks'] . "</td>";
  
  echo "<td align='center'>" . $row['total'] . "</td>";
  echo "<td style='cursor:pointer;color:#0099CC'><a href='monthlyeditcon.php?id=".$row['id']."'>Edit</a></td>";
  $id=$row['id'];
  echo "<td style='cursor:pointer;color:#0099CC'><a onclick='var con = confirm(\"R u sure?\"); if(con){window.location=\"monthlydeletecontent.php?id=$id\"}'>Delete</a></td>";
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
		
        
        <!---- Place All the Button here ---->
        <!---
        
        
        <li><span class="button send_form_btn"><span><span><a href="monthlyexpenses.php"><font color="#FFFFFF">BACK</font></a></span></span></span>	</li>												
									</ul>
																
			---->													
																
																
																       
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
                        <li><a href="monthlyview.php"><span><span>Monthly Expenses</span></span></a></li>
                          <li><a href="salaryview.php"><span><span>Salary</span></span></a></li>
						<li><a href="passview.php" class="selected"><span><span>MIT Account</span></span></a></li>
						<li><a href="clientview.php"><span><span>Client Details</span></span></a></li>
						<li><a href="followup.php"><span><span>Followups</span></span></a></li>
                        	<li><a href="AddEmployeeView.php"><span><span>Employee</span></span></a></li>
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

