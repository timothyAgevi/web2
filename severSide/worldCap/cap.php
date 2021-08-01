<!-- cap.php  -->
<?php
$conn=odbc_connect("AFRICA","","");
if($conn)
   echo"CONNECTION SUCCESSFULL<BR>";
else
  echo"CONNECTION NOT SUCCESSFULL<BR>";
  
$sql="INSERT INTO TEAMS
      (CODE_COUNTRY,[COUNTRY NAME],CONTINENT)
	  VALUES
	  ('$_POST[txtcode]','$_POST[txtname]','$_POST[txtcont]')";

if(odbc_exec($conn,$sql))
{
 echo"Registration successful<br>";
}
else
echo"Registration not successful<br>";
odbc_close($conn); 

?>