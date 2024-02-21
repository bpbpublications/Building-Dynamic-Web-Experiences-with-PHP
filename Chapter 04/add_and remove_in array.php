<?php
// Create an empty array
$fruits = array();

// Adding elements to the array
$fruits[] = "apple"; // Add "apple" to the end of the array
$fruits[] = "banana"; // Add "banana" to the end of the array
array_push($fruits, "cherry", "date"); // Add "cherry" and "date" to the end of the array

// Display the array after adding elements
echo "Array after adding elements: ";
print_r($fruits);
echo "<br>";

// Removing elements from the array
unset($fruits[1]); // Remove element at index 1 ("banana")
$lastFruit = array_pop($fruits); // Remove the last element ("date") and store it in $lastFruit
$firstFruit = array_shift($fruits); // Remove the first element ("apple") and store it in $firstFruit

// Display the array after removing elements
echo "Array after removing elements: ";
print_r($fruits);
echo "<br>";

// Display the removed elements
echo "Removed elements: ";
echo "First Fruit: $firstFruit, Last Fruit: $lastFruit";
?>