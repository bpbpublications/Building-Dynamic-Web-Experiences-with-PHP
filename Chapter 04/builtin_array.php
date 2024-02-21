<?php
// Create an array
$array = array("banana", "apple", "orange");

// Count the number of elements in the array
echo "Number of elements in the array: " . count($array) . "<br>";

// Sort the array in ascending order
sort($array);
echo "Sorted array in ascending order: ". "<br>";
print_r($array);

// Sort the array in descending order
rsort($array);
echo "Sorted array in descending order:". "<br>";
print_r($array);

// Join array elements with a string
$string = implode(", ", $array);
echo "Array elements joined with a comma: $string ". "<br>";

// Split a string by a string into an array
$newArray = explode(", ", $string);
echo "New array after splitting the string:". "<br>";
print_r($newArray);

// Push one or more elements onto the end of an array
array_push($array, "grape");
echo "Array after pushing 'grape' onto the end: ". "<br>";
print_r($array);

// Pop the element off the end of an array
$poppedElement = array_pop($array);
echo "Popped element: $poppedElement". "<br>";

// Shift an element off the beginning of an array
$shiftedElement = array_shift($array);
echo "Shifted element: $shiftedElement". "<br>";

// Prepend one or more elements to the beginning of an array
array_unshift($array, "kiwi", "pear");
echo "Array after unshifting 'kiwi' and 'pear' to the beginning: ". "<br>";
print_r($array);


$array = array(1, 2, 2, 3, 4, 4, 5);
$unique_array = array_unique($array);
print_r($unique_array);
?>