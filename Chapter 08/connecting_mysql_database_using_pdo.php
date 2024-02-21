<?php
 // Database credentials

 $hostname = "localhost"; // Replace with your MySQL server hostname 
or IP address
 $username = "your_username"; // Replace with your MySQL username
 $password = "your_password"; // Replace with your MySQL password
 $database = "your_database"; // Replace with the name of your MySQL 
database
 try 
{
    // Create a PDO database connection

    $pdo = new PDO("mysql:host=$hostname;dbname=$database", 
$username, $password);
    // Set PDO to throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Now you can perform database operations using $pdo
    // Example: Query the database
    $query = "SELECT * FROM your_table";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . 
"<br>";
    }
 } 
catch (PDOException $e) {
    die("Error: " . $e->getMessage());
 }

// Close the database connection (not necessary with PDO, as it's 
automatically closed)
 $pdo = null;
 ?>