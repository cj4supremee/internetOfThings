<?php
/*
* dbCred.php
* These are the DBMS credentials and the database name
*/
$hostName = "localhost:/usr/cis/var/triton.sock";
$databaseName = "cjose1db";  
$username = "cjose1";             
$password = "Cosc*2nd4";              
// Show an error and stop the script
function showerror()
{
if (mysql_error())
die("Error " . mysql_errno() . " : " . mysql_error());
else
die ("Could not connect to the DBMS");
}
?>