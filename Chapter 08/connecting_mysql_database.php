 <?php
 // Database credentials
 $hostname = "localhost"; // Replace with your MySQL server hostname or IP address
 $username = "your_username"; // Replace with your MySQL username
 $password = "your_password"; // Replace with your MySQL password
 $database = "your_database"; // Replace with the name of your MySQL  database

 // Create a connection to the MySQL database

 $mysqli = new mysqli($hostname, $username, $password, $database);
 // Check if the connection was successful
 if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
 }
 // Now you can perform database operations using $mysqli
 // Example: Query the database
 $query = "SELECT * FROM your_table";
 $result = $mysqli->query($query);
 if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . 
"<br>";
    }
    $result->free(); // Free the result set
 } else {
    echo "Error: " . $mysqli->error;
 }
 // Close the database connection
 $mysqli->close();
 ?>