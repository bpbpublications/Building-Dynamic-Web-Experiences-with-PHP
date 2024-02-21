<?php
// Database credentials
$servername = "localhost";
$username = "username";
$password = "password";
$database = "dbname";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query example
$query = "SELECT id, name, email FROM users";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Fetching data using mysqli_fetch_assoc
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}

// Prepare statement example
$stmt = mysqli_prepare($conn, "INSERT INTO users (name, email) VALUES (?, ?)");
$name = "John";
$email = "john@example.com";
mysqli_stmt_bind_param($stmt, "ss", $name, $email);
mysqli_stmt_execute($stmt);

echo "New record inserted successfully.";

// Close connection
mysqli_close($conn);
?>