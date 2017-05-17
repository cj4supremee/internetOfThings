<!DOCTYPE html>
<html lang="en">
<head>
    <title>Term Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="sticky-footer.css" rel="stylesheet">
    


    
</head>
<body>
    <header>
      <nav>
            <ul>
                <li><a href="termProject.php">| Home |</a></li>
                <li><a href="resourcePage.html">Resource Code |</a></li>
               
            </ul>
      </nav>
    
    </header>

<div class="jumbotron text-center">
    <h1>Internet of Things</h1>
    <p>Keep track of all the new Smart Thermostats Available on the Market</p>
</div>

                        <!-- This is the Left Section -->
    
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Sign up for Email Updates</h3>
            
                <form action="addEmail.php" method="post">
                    Email:<input type="email"name="email"><br/>
                    Name: <input type="text" name="name"><br/>
                    <input type="submit">
                </form>
            </br>
            
            <p>Click here to see the Current people on our mailing list</p>
            <form action="display.php" method="post">
                <input type="submit" value="Display"/>
        
            </form>
            
            
        </div>
        
            <div class="col-md-6">
                <!-- This is the Middle Section -->
<h3>Current Available Thermostats</h3>
    <table border=1>
        <tr><th>ID</th><th>item_Name</th><th>Price</th><th>Release</th>
        <th>cNet_Rating</th></tr>
<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statementaf
$query = "SELECT * FROM thermo";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
// Display results
while ($row = @ mysql_fetch_array($result))
  echo "<tr><td>{$row["id"]}</td>
<td>{$row["item_Name"]}</td>
<td>{$row["Price"]}</td>
<td>{$row["Release_Date"]}</td>
<td>{$row["cNet_Rating"]}</td></tr>";
?>
    </table>

  <h3>Enter the Product "ID" to delete</h3>
    <form action="deleteProduct.php" method="post">
        ID:<input type="number" name="deleted">  
        <input type="submit" value="Delete">
    
    </form>
    <br>
    <br>
    <br>
    <h3>Choose a specific Product to View</h3>
    <form action="byProduct.php" method="post">
        <select name="products" style="margin-left:1em">
            <option value="Nest Learning">Nest Learning</option>
            <option value="Honeywell Lynics">Honeywell Lynics</option>
            <option value="Ecobee 3">Ecobee 3</option>
            <option value="Lux TX500V">Lux TX500v</option>
        </select><br><br>
        <input type="submit" value="View"/>
    </form>
                
</div>
    
    

 
<div class="col-md-2">

        <!-- This is the Right Section -->
    <h3>Enter Product "ID" to Update</h3>
        <form action="addProduct.php" method="post">
            ID:<input type="text"name="uID"><br/>
            Item_Name:<input type="text"name="iName"><br/>
            Price: <input type="text" name="price"><br/>
            Release:<input type="text" name="release"><br/>
            cNet_Rating: <input type="text" name="rating"><br/>
            <input type="submit">
            <input type="reset">
        </form>
  
  
    
    
</div>
        </div>
    </div>
    
   <footer class="footer">
      <div class="container">
        <span class="text-muted">All Rights Reserved Colin Jose</span>
      </div>
    </footer>
        

</body>
</html>