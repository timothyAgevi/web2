<?php
$conn=mysql_connect("localhost","xyz","xyz");
if($conn)
{
 echo"Connection to the server was successful!!!<br>";	
}
else
{
 echo"Connection was not successful!!!<br>";
 die('REASON: '.mysql_error());	
}

$dbconnect=mysql_select_db("IEBC",$conn);

if($dbconnect)
{
 echo"Connection to the database established successfully!!!!<br>";	
}
else
{
   echo"Connection to the database was not successful!!!!!<br>";
}

 $sql="SELECT ID,FIRSTNAME,LASTNAME FROM REGISTER
       WHERE ID=('$_POST[txtID]')";

 $result=mysql_query($sql,$conn);
echo"<table BORDER=1>";
echo"<tr>";
echo"<th>";
echo"CUSTOMER NUMBER";
echo"</th>";
echo"<th>";
echo"FIRSTNAME";
echo"</th>";
echo"<th>";
echo"LAST NAME";
echo"</th>";
echo"</tr>";
 
 while($data=mysql_fetch_array($result))
 {
   echo"<tr>"; 
   echo"<td>" .$data['ID'];
   echo"</td>";
   echo"<td>" .$data['FIRSTNAME'];
   echo"</td>";
   echo"<td>" .$data['LASTNAME'];
   echo"</td>";
   echo"</tr>";
 }
echo"</table>";
 mysql_close($conn);
?>