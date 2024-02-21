<?php
$string = "Hello, world!";
$lowercase = strtolower($string);
$uppercase = strtoupper($string);
echo "Lowercase: $lowercase\n"; // Output: Lowercase: hello, world!
echo "Uppercase: $uppercase\n"; // Output: Uppercase: HELLO, WORLD!

$string = "   Trim whitespace   ";
$trimmedString = trim($string);
echo "Trimmed string: '$trimmedString'"; 

$string = "Hello, world!";
$length = strlen($string);
echo "Length of the string: $length"; // Output: Length of the string: 13

$string = "Hello, world!";
$substring = substr($string, 7);
echo "Substring: $substring"; 


$string = "Hello, world!";
$newString = str_replace("world", "PHP", $string);
echo "New string: $newString"; // Output: New string: Hello, PHP!

?>