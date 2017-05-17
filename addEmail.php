<?php
include 'dbCred.php';

$email= $_POST['email'];
$name= $_POST['name'];


// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();

// Create SQL statement
$query = 'INSERT INTO login (email,name) VALUES ("'.$email.'", "'. $name.'")';



// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
else
    
?>
