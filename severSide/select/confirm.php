<?php

$dbconnect=odbc_connect("DB_JKUAT_KAREN","pppp","yyyy");

$sql="SELECT REGNUMBER,FIRSTNAME,LASTNAME,AGE
            FROM STUDENT
            WHERE REGNUMBER='$_POST[txtRegNum]'";

$success=odbc_exec($dbconnect,$sql);

while(odbc_fetch_row($success))
{
  $regNumber=odbc_result($success,"REGNUMBER");
  $FirstName=odbc_result($success,"FIRSTNAME");
  $LastName=odbc_result($success,"LASTNAME");
  $Age=odbc_result($success,"AGE");

  echo"Registration Number: ".$regNumber."<br>";
  echo"First Name: ".$FirstName."<br>";
  echo"Last Name: ".$LastName."<br>";
  echo"Student Age: ". $Age."<br>";
}
odbc_close($dbconnect);

?>