<?php
include("includes/db_con.php");
checkAdminSession();
if(isset($_POST['submit']))
 {
	$FName=$_POST['EName'];
 	$EPassWord= $_POST['EPassword'];
	$EMailId= $_POST['EMail'];
 	$EDob=$_POST['dob'];
 	$EGender=$_POST['Esex'];
 	$EDesi= $_POST['EDesignation'];
 	$EMstatus=$_POST['Marital_status'];
 	$Eaddress=$_POST['EAddress'];
 	$ECountry=$_POST['country'];
 	$EState=$_POST['state'];
 	$ECity=$_POST['city'];
 	$EPin=$_POST['pin'];
 	$EMobno=$_POST['EMobileNumber'];
	$ccode=$_SESSION['college_code'];
    date_default_timezone_set("Asia/Calcutta");
    $updated_time_stamp = date('Y-m-d H:i:s');
 
 
$query="SELECT member_details.id,member_details.code,member_details.user_login_fk  FROM member_details LEFT JOIN user_login ON member_details.user_login_fk = user_login.id WHERE user_login.user_type_fk=3 
ORDER BY member_details.id ASC"; 


$res = mysql_query($query);
if(mysql_num_rows($res)>0)
{while($row=mysql_fetch_object($res))
  {
     $cc=$row->id;
     $userloginfk=$row->user_login_fk;   
  }
$qy = "select code from member_details where id=$cc";
//print 11
$rs = mysql_query($qy);
$row=mysql_fetch_array($rs);
$cd = $row['code'];
$val =  substr($cd,3);
$cd = $val+1;
$Emp_Code =  "MIT".$cd;

//echo $Emp_Code; 
}




/*$qry = "INSERT INTO user_login(user_type_fk,user_mail,password,isactive,insert_userid) values(3,'$Fname','$EPassWord',1,3)";
*/

$query_User_Login = "insert into user_login(user_type_fk,user_mail,password,isactive,insert_userid)values(3,'$FName','$EPassWord',1,3)"; 
if(mysql_query($query_User_Login))
{
//echo "Reqestion Done";
$query_max_id ="SELECT *FROM user_login where id = (SELECT max(id) FROM user_login) AND isactive = 1";
if($res = mysql_query($query_max_id))
{   $row = mysql_fetch_object($res);	
	$Login_ID = $row->id;
    $query="INSERT INTO member_details( code,
										user_login_fk,
										first_name,
										password,
										mailid,
										dob,
										gender,
										designation,
										mstatus,
										address,
										country,
										states,
										city,
										pin,
										mobile_number,
										update_TS
									  )
								values
								('$Emp_Code',
								 '$Login_ID',
								 '$FName',
								 '$EPassWord',
								 '$EMailId',
								 '$EDob',
								 '$EGender',
								 '$EDesi',
								 '$EMstatus',
								 '$Eaddress',
								 '$ECountry',
								 '$EState',
								 '$ECity',
								 '$EPin',
								 '$EMobno',
								 '$updated_time_stamp'
								 
								)";
							if(mysql_query($query))
							{
							header("location:addemployee.php?msg=Created Successfully"); 
							}
    }
}
/*
if(mysql_query($qry))
{
$qry1 = "SELECT *FROM user_login where id = (SELECT max(id) FROM user_login) AND isactive = 1";
$res = mysql_query($qry1);
$row = mysql_fetch_object($res);
$log_id = $row->id;
echo $log_id;


$query="INSERT INTO member_details(code,user_login_fk,first_name)values('$code','$log_id','$FName')";


 		if(mysql_query($query))
 			{
 			header("location:addemployee.php?msg=Created Successfully");
 			}
	
  */
 }
 mysql_close($con);
?>