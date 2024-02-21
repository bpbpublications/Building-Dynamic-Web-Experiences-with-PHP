<?php

// Define a variable
$originalVariable = 10;

// Create a reference to the variable
$referenceVariable = &$originalVariable;

// Modify the original variable
$originalVariable = 20;

// Output the values of both variables
echo "Original variable: " . $originalVariable . "\n";  // Output: Original variable: 20
echo "Reference variable: " . $referenceVariable . "\n"; // Output: Reference variable: 20

// Modify the reference variable
$referenceVariable = 30;

// Output the values of both variables again
echo "Original variable: " . $originalVariable . "\n";  
echo "Reference variable: " . $referenceVariable . "\n"; 
?>
