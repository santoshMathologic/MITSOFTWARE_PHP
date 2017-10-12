<?php

include("includes/db_con.php");
checkAdminSession();
if(isset($_POST['submit']))
 { 	$FName=$_POST['EName'];
 	$EPassWord= $_POST['EPassword'];
	$EMailID=$_POST['EMail'];
	$EDob=$_POST['dob'];
 	$EGender=$_POST['Esex'];
 	$EDesignation = $_POST['EDesignation'];
 	$EMarital_status=$_POST['Marital_status'];
 	$Eaddress=$_POST['EAddress'];
 	$ECountry=$_POST['country'];
 	$EState=$_POST['state'];
 	$ECity=$_POST['city'];
 	$EPin=$_POST['pin'];
 	$EMobileno=$_POST['EMobileNumber'];
	
$query1 = "select md.id,md.code from addemployee as md LEFT JOIN user_login as ul ON md.user_login_fk = ul.id where user_type_fk = 3";

$res = mysql_query($query1);
		if(mysql_num_rows($res)>0)
			{
				while($row=mysql_fetch_object($res))
					{
						$cc=$row->id;
						//echo "<br/>" .$cc;
					}

			$qy = "SELECT code from addemployee WHERE id=$cc";
			$rs = mysql_query($qy);
			$rw=mysql_fetch_array($rs);	
			$cd = $rw['code'];
		
			$val = substr($cd, -4);
			$id=$val+1;
			$cod=substr($ccode,-4);
			$code = $cod."MIT".$id;
				}
		else
			{
			$cod=substr($ccode,-4);
			$code = $cod."MIT1001";
			}
$qry = "insert into user_login(user_type_fk,user_mail,password,isactive,insert_userid) values(3,'$uname','$password',1,3)";
if(mysql_query($qry)){
$qry1 = "select id from user_login where id = (select max(id) from user_login) and isactive = 1";
$res = mysql_query($qry1);
$row = mysql_fetch_array($res);
$log_id = $row['id'];




$query="INSERT INTO addemployee(user_Login_FK,code,EFirst_Name,EPassword,mailid,EDob,EGender,EDesignation,EMarital_Status,E_ADDRESS,EState,ECity,EPinCode,EPhone_NO,isActive,isApproved)values('$log_id' ,'$code','$FName','$EPassWord','$EMailID','$EDob','$EGender','$EDesignation','$EMarital_status','$ECountry','$EState','$ECity','$EPin','$EMobileno',1,1)";
	
if(mysql_query($query))
{     header("location:addemployee.php?msg=Created Successfully");
}
}
}
?>