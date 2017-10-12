  <?php
							include "includes/db_con.php";
							{
								
							$query = "SELECT * from  reminder";
							$res = mysql_query($query);
							$num_rows = mysql_num_rows($res);
								if($num_rows>=1)
								{
							echo "<table id='table_struct'  width='100%' cellspacing='1' cellpadding='1'>
							     <tr class='tr_class'>
								 <td align='center' style='font-weight:bold'>Details </td>
								 <td align='center' style='font-weight:bold'> Date </td>
							</tr>";
								while($row = mysql_fetch_array($res))
								{
									    $id = $row['id'];
										echo"<tr class='tr_class1'>
										<td align='center'>".$row['details']."</td>
										<td align='center'>".$row['date']."</td>";
									echo "</tr>";
								}
								echo "</table>";
							}
							else	{
								     echo "<table  width='100%' cellspacing='1' cellpadding='1'><tr class='tr_class'><td>No Record Found!!</td></tr></table>";
								    }
							}	
						 	?>
                                       