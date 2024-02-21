<?php
$original_array = array( 
"apple" => "red", 
"banana" => "yellow", 
"orange" => "orange", 
); 
echo"Original Array is:";
print_r($original_array); 
echo"<br>";
echo"Flipped Array is:";
$flipped_array = array_flip($original_array); 
print_r($flipped_array); 
?>