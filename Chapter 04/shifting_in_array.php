<?php
// Define an array
$numbers = array(2, 3, 4, 5);

// Shifting an element
$shiftedElement = array_shift($numbers);
echo "Shifted Element: $shiftedElement\n"; // Output: Shifted Element: 2
print_r($numbers); 

// Unshifting elements

array_unshift($numbers, 1);
echo"<br>";
print_r($numbers); 
?>