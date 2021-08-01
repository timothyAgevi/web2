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
 
 $sql="INSERT INTO CUSTOMERS(CUSTOMERID,FIRSTNAME,LASTNAME,PHONE,ADDRESS)
        VALUES('$_POST[txtcustnumber]','$_POST[txtfirstname]',
		'$_POST[txtlastname]','$_POST[txtphone]','$_POST[txtaddress]')";
 if(mysql_query($sql,$conn))
 {
	echo"Registration was successful!!. Thank you for registering with us.<br>"; 
 }
 
 else
 {
	echo"Registration was not successful!!. Please try again.<br>"; 
 }
 mysql_close($conn);
?>