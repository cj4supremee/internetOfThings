<?php
include 'dbCred.php';

$deleteId= $_POST['deleted'];



// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();

// Create SQL statement
$query = "DELETE FROM thermo where id = '$deleteId'";



// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();

    
?>
<h3>You have successfully deleted the user</h3>