<?php
$query="select * from reminder where date='$date'";
$result=mysql_query($query,$connect);
{
$number_of_days_before = 10;
$email = "parameswari1226@gmail.com";
$reminder_details = "";
$todays_date = date( "Ymd" );
//$year = substr($todays_date, 0, 4);
$month = substr($todays_date, 1);
$date = substr($todays_date, 1);
$trigger_date = date("Ymd", mktime (0,0,0,$month,$date-$number_of_days_before));
$result = mysql_query( "SELECT * FROM reminder WHERE date <= $trigger_date ORDER BY date ASC" );
$nr = mysql_num_rows( $result );
while( $row = mysql_fetch_array( $result ) )
{
//$year = substr($row["postdate"], 0, 4);
$month = substr($row["date"], 1);
$date = substr($row["date"], 1);
$postdate = date("M j, Y", mktime (0,0,0,$month,$date,$year));
$reminder_details .= "Event: ".$row["reminder_name"]."\n";
$reminder_details .= "Date: ".$postdate."\n";
$reminder_details .= $row["reminder_desc"]."\n\n";
}
mysql_free_result( $result );
if( !empty( $nr ) )
{
// Send out Reminder mail
$mailheader = "From: Reminder System <$email>\nX-Mailer: Reminder\nContent-Type: text/plain";
mail("$email","Reminder","$reminder_details","$mailheader");
// Delete the sent reminders
mysql_query("DELETE FROM reminder WHERE date <= $trigger_date");
}
}
?>