<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
 echo"Connection to the server was successful!!!<br>";	
}
else
{
 echo"Connection was not successful!!!<br>";
 die('REASON: '.mysql_error());	
}

$dbconnect=mysql_select_db("BANKING",$conn);

if($dbconnect)
{
 echo"Connection to the database established successfully!!!!<br>";	
}
else
 echo"Connection to the database was not successful!!!!!<br>";
 
 $sql=mysql_query("SELECT * FROM CUSTOMERS  WHERE CUSTOMERID ='$_POST[txtcustnumber]' ORDER BY FIRSTNAME DESC");
 

 echo"<b>This is the result of the search</b><br>";
 echo"<table border=1>";
 echo"<tr>";
 echo"<th>CUSTOMER NUMBER</th><th>FIRST NUMBER</th><th>LAST NUMBER</th><th>CUSTOMER   
        ADDRESS</th><th>CUSTOMER PHONE</th>";
 echo"</tr>";	
 while($row=mysql_fetch_array($sql))
 {
	echo"<tr>";
	echo"<td>".$row['CUSTOMERID']."</td>";
	echo"<td>".$row['FIRSTNAME']."</td>";
	echo"<td>".$row['LASTNAME']."</td>";
	echo"<td>".$row['ADDRESS']."</td>";
	echo"<td>".$row['PHONE']."</td>";
	echo"</tr>";
 }
 echo"</table>";
 mysql_close($conn);
?>