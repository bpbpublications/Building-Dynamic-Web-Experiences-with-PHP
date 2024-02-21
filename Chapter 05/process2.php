<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && 
isset($_POST["email"])) 
{ 
$name = $_POST["name"]; 
$email = $_POST["email"]; 

}
?>