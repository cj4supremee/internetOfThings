 <table border=1>
        <tr><th>email</th><th>name</th></tr>
<?php

include 'dbCred.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statementaf
$query = "SELECT * FROM login";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
// Display results
while ($row = @ mysql_fetch_array($result))
  echo "<tr>
<td>{$row["email"]}</td>
<td>{$row["name"]}</td>";
?>
     
    