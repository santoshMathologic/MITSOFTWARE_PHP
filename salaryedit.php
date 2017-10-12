
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin.css"  />
<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon.ico" />
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
		                        <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
                          		<li><a href="salaryview.php" class="selected"><span><span>Salary</span></span></a></li>
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
							<h2 style="margin-left:450px;">SALARY INFORMATION</h2>
							
							<!--[if !IE]>start section menu<![endif]-->
							<ul class="section_menu">
								<!--<li><a href="#"><span><span>Inactive Tab</span></span></a></li>
								<li><a href="#" class="active"><span><span>Active Tab</span></span></a></li>
								<li><a href="#"><span><span>Products</span></span></a></li>
								<li><a href="#"><span><span>Last One</span></span></a></li>-->
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
												<form action="salarydeleteCheck.php" class="search_form general_form" method="post">
													<!--[if !IE]>start fieldset<![endif]-->
													<fieldset>
														<!--[if !IE]>start forms<![endif]-->
														<div class="forms">
														
                                                   
<?php
include "includes/db_con.php";


$id = $_REQUEST['id'];
$query = "select * from  salary";
$result= mysql_query($query);
if(mysql_num_rows($result)>0)
	{
echo "<table border='1' width='1024' height='100' cellspacing='0' cellpadding='0' white-space:'30' bgcolor='white'>
<tr>


<th>Employee Id</th>
<th>Employee Name</th>
<th>Salary</th>
<th>Designation</th>
<th></th>
<th></th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td align='center'>" . $row['emp_id'] . "</td>";
  echo "<td align='center'>" . $row['emp_name'] . "</td>";
  echo "<td align='center'>" . $row['salary'] . "</td>";
  echo "<td align='center'>" . $row['designation'] . "</td>";
  echo "<td align='center'><a href='salaryeditcon.php?id=".$row['id']."'>Edit</a></td>";
  $id=$row['id'];
 
  echo "<td align='center' style='cursor:pointer;color:#9698b6'><a onclick='var con = confirm(\"R u sure?\"); if(con){window.location=\"salarydeletecontent.php?id=$id\"}'>Delete</a></td>";
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
		
       <!--- Place the Button Here -->
        
       <!-- <li><span class="button send_form_btn"><span><span><a href="salarydeletecontent.php"><font color="#FFFFFF">DELETE</font></a></span></span></span>	</li>												
									</ul>
           -->  
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
                        <li><a href="monthlyview.php"><span><span>Expenses</span></span></a></li>
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

