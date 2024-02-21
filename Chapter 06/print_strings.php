<?php
// Using echo to print a string
echo "Using echo: Hello, world!<br>";

// Using print to print a string
print "Using print: Hello, world!<br>";

// Using printf to format and print a string
$number = 10;
$string = "PHP";
printf("Using printf: There are %d types of people who love %s.<br>", $number, $string);

// Using print_r to print human-readable information about a variable
$array = array('apple', 'banana', 'cherry');
print_r($array);
echo "<br>";

// Using var_dump to display information about a variable including its type and value
var_dump($array);
echo "<br>";

?>