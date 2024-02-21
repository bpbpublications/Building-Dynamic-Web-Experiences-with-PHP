<?php
// Example of implode() function
$colors = array('red', 'green', 'blue');
$colorString = implode(', ', $colors);
echo "Implode Example: $colorString <br>";

// Example of explode() function
$string = "apple,banana,orange";
$fruits = explode(',', $string);
echo "Explode Example: ";
print_r($fruits);

// Sample array for demonstration
$fruits = array("apple", "banana", "cherry", "date", "elderberry");

// array_slice(): Extract a slice of the array
$slice = array_slice($fruits, 1, 3); // Start from index 1, extract 3 elements
echo "Array Slice: ";
print_r($slice);
echo "<br>";

// array_splice(): Remove a portion of the array and replace it with something else
array_splice($fruits, 2, 2, array("grape", "fig")); // Remove 2 elements starting from index 2, and insert "grape" and "fig"
echo "Array Splice: ";
print_r($fruits);
echo "<br>";

// array_filter(): Filter elements of an array using a callback function
$numbers = array(1, 2, 3, 4, 5, 6);
$filtered = array_filter($numbers, function($value) {
    return $value % 2 == 0; // Filter even numbers
});
echo "Array Filter: ";
print_r($filtered);
echo "<br>";

// array_keys(): Return all the keys or a subset of the keys of an array
$keys = array_keys($fruits);
echo "Array Keys: ";
print_r($keys);
echo "<br>";

// array_values(): Return all the values of an array
$values = array_values($fruits);
echo "Array Values: ";
print_r($values);
echo "<br>";

// array_column(): Return the values from a single column in the input array
$data = array(
    array('id' => 1, 'name' => 'John'),
    array('id' => 2, 'name' => 'Jane'),
    array('id' => 3, 'name' => 'Doe')
);
$names = array_column($data, 'name');
echo "Array Column: ";
print_r($names);
echo "<br>";

// array_search(): Search an array for a value and return the corresponding key if successful
$key = array_search('banana', $fruits);
echo "Array Search: Key of 'banana' is $key <br>";

// array_key_exists(): Check if the given key or index exists in the array
if (array_key_exists(1, $fruits)) {
    echo "Key 1 exists in the array <br>";
} 
else {
    echo "Key 1 does not exist in the array <br>";
}
?>