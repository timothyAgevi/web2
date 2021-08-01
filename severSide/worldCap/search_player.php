<?php
$conn=odbc_connect("AFRICA","","");
if($conn)
   echo"CONNECTION SUCCESSFULL<BR>";
else
  echo"CONNECTION NOT SUCCESSFULL<BR>";
  
$sql="SELECT PLAYER_CODE,[PLAYER NAME],[PROFESSIONAL CLUB],GOALS,COUNTRY_CODE
       FROM PLAYERS
       WHERE PLAYER_CODE='$_POST[txtplayer]'";

$result=odbc_exec($conn,$sql);
echo"<b>This is the result of the search</b><br>";
 echo"<table border=1>";
 echo"<tr>";
 echo"<th>PLAYER CODE</th><th>PLAYER NAME</th><th>PROFESSIONAL CLUB</th>
      <th>GOALS</th><th>CODE COUNTRY</th>";
 echo"</tr>";
while(odbc_fetch_row($result))
 {
	echo"<tr>";
	echo"<td>".odbc_result($result,1)."</td>";
	echo"<td>".odbc_result($result,2)."</td>";
	echo"<td>".odbc_result($result,3)."</td>";
	echo"<td>".odbc_result($result,4)."</td>";
	echo"<td>".odbc_result($result,5)."</td>";
	echo"</tr>";
}

 echo"</table>";

odbc_close($conn); 

?>