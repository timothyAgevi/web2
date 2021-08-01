<?php

$dbconnect=odbc_connect("DB_JKUAT_KAREN","","");

if($dbconnect)
{

 echo"Connection was successful<br>";

}

else
{
 echo"Connection was not successfull<br>";
 
}


$sql="INSERT INTO STUDENT(REGNUMBER,FIRSTNAME,LASTNAME,AGE)
      VALUES
     ('$_POST[txtRegNum]','$_POST[txtFname]','$_POST[txtLname]','$_POST[txtAge]')";

$success=odbc_exec($dbconnect,$sql);

if($success)
{
  echo"1 row inserted<br>";

}

else
{
 echo"Query not successfull<br>";
}

odbc_close($dbconnect);
?>