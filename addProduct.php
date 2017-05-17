<?php
include 'dbCred.php';

$itemName= $_POST['iName'];
$price= $_POST['price'];
$release= $_POST['release'];
$rating= $_POST['rating'];
$updateid= $_POST['uID'];


// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();

// Create SQL statement
$query = "UPDATE thermo SET item_Name='$itemName', Price='$price', Release_Date='$release', cNet_Rating='$rating' where ID ='$updateid'";



// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();


    
?>
<h3>You Have updated the selection!</h3>

