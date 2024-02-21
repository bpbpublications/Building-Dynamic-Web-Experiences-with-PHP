<?php 
$pdo = new PDO("mysql:host=localhost;dbname=database", "username", "password");
 $stmt = $pdo->prepare("SELECT * FROM table");
 $stmt->execute();
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['column_name'];
 }
 $pdo = null; // Close the connection
?>
