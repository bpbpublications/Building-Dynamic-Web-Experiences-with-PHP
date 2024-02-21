<?php
// Sample array for demonstration
$numbers = array(8, 2, 5, 1, 9);

// Original array
echo "Original Array: ";
print_r($numbers);
echo "<br>";

// Sort in ascending order (Default behavior)
sort($numbers);
echo "Sorted Array (Ascending Order): ";
print_r($numbers);
echo "<br>";

// Sort in descending order
rsort($numbers);
echo "Sorted Array (Descending Order): ";
print_r($numbers);
echo "<br>";

// Sort associative array by values in ascending order
$assocArray = array("b" => 4, "a" => 7, "c" => 2);
asort($assocArray);
echo "Sorted Associative Array (Ascending Order by Value): ";
print_r($assocArray);
echo "<br>";

// Sort associative array by values in descending order
arsort($assocArray);
echo "Sorted Associative Array (Descending Order by Value): ";
print_r($assocArray);
echo "<br>";

// Sort associative array by keys in ascending order
ksort($assocArray);
echo "Sorted Associative Array (Ascending Order by Key): ";
print_r($assocArray);
echo "<br>";

// Sort associative array by keys in descending order
krsort($assocArray);
echo "Sorted Associative Array (Descending Order by Key): ";
print_r($assocArray);
echo "<br>";

// Sorting using a user-defined comparison function
function customSort($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

usort($numbers, "customSort");
echo "Sorted Array using Custom Sort Function: ";
print_r($numbers);
echo "<br>";

?>