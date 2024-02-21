<?php

// Global variable
$globalVar = "I'm a global variable";

function testFunction() {
    // Accessing global variable within function
    global $globalVar;
    echo "Inside function: " . $globalVar . "<br>";
    
    // Local variable
    $localVar = "I'm a local variable";
    echo "Inside function: " . $localVar . "<br>";
}

// Accessing global variable outside function
echo "Outside function: " . $globalVar . "<br>";

// Trying to access local variable outside function (will cause an error)
// echo "Outside function: " . $localVar;

testFunction();
?>