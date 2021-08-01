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
 echo"Connection to the database was not successful!!!!!<br>";
 
 $sql="UPDATE REGISTER
       SET FIRSTNAME='$_POST[txtFname]',
           LASTNAME='$_POST[txtLname]',
           SURNAME='$_POST[txtSname]',
           CONSTITUENCY='$_POST[txtCons]',
           POL_STATION='$_POST[txtPoll]',
           DISTRICT='$_POST[txtDistrict]',
           COUNTY='$_POST[txtCounty]',
           LOCATION='$_POST[txtLoc]',
           SUB_LOCATION='$_POST[txtSub]'
WHERE ID= '$_POST[txtID]'";

   $query=mysql_query($sql,$conn);


 if($query)
 {
  echo"1 row updated<br>";	
  
 }
 
 else
 {
   echo"No row updated<br>";
   
 }
 mysql_close($conn);
?>
