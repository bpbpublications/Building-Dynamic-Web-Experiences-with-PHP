<?php

// Implicit type casting
$str = "10"; // String
$int = 5;    // Integer

// Performing addition operation (implicit type casting)
$result = $str + $int; // Result will be 15 (integer)

// Explicit type casting
$float = 3.14; // Float

// Explicitly casting float to integer
$int2 = (int) $float; // $int2 will be 3 (integer)

// Outputting results
echo "Implicit Type Casting: " . $result . "<br>"; // Output: Implicit Type Casting: 15
echo "Explicit Type Casting: " . $int2; // Output: Explicit Type Casting: 3

?>