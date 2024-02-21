<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data (you can perform validation here)
    // For now, we'll just print the submitted data
    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit();
}
?>