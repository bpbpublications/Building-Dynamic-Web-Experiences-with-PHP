<?php

// Arithmetic operators
echo"Arithmetic Operator"."<br>";
$addition = 5 + 2;         // Addition
$subtraction = 5 - 2;      // Subtraction
$multiplication = 5 * 2;   // Multiplication
$division = 5 / 2;         // Division
$modulus = 5 % 2;          // Modulus
$exponentiation = 5 ** 2;  // Exponentiation
// Increment/Decrement operators
$increment = 5;
$increment++;               // Increment
$decrement = 5;
$decrement--;               // Decrement


echo"Addition is $addition"."<br>";
echo"Subtraction is $subtraction"."<br>";
echo"Multiplication is $multiplication"."<br>";
echo"Division is $division"."<br>";
echo"Remainder is $modulus "."<br>";
echo"Exponent is $exponentiation"."<br>";
echo"Increment Operator is: $increment"."<br>";
echo"Decrement Operator is: $decrement"."<br>";


// Assignment operators
echo"Assignment Operators"."<br>";
$assignment = 10;
$assignment += 2;  // Addition assignment
$assignment -= 2;  // Subtraction assignment
$assignment *= 2;  // Multiplication assignment
$assignment /= 2;  // Division assignment
$assignment %= 3;  // Modulus assignment
$concatenation = "Hello, ";
$concatenation .= "PHP!";  // Concatenation assignment

echo"Assignment Operators: $assignment". "<br>";
echo"Addition Assignment Operators: $assignment<br>";
echo "Concatenation is $concatenation"."<br>";


// Comparison operators
         $a = 42;
         $b = 20;
      
         if( $a == $b ) {
            echo "TEST1 : a is equal to b<br/>";
         }else {
            echo "TEST1 : a is not equal to b<br/>";
         }
      
         if( $a > $b ) {
            echo "TEST2 : a is greater than  b<br/>";
         }else {
            echo "TEST2 : a is not greater than b<br/>";
         }
      
         if( $a < $b ) {
            echo "TEST3 : a is less than  b<br/>";
         }else {
            echo "TEST3 : a is not less than b<br/>";
         }
      
         if( $a != $b ) {
            echo "TEST4 : a is not equal to b<br/>";
         }else {
            echo "TEST4 : a is equal to b<br/>";
         }
      
         if( $a >= $b ) {
            echo "TEST5 : a is either greater than or equal to b<br/>";
         }else {
            echo "TEST5 : a is neither greater than nor equal to b<br/>";
         }
      
         if( $a <= $b ) {
            echo "TEST6 : a is either less than or equal to b<br/>";
         }else {
            echo "TEST6 : a is neither less than nor equal to b<br/>";
         }
	if( $a === $b ) {
            echo "TEST7 : a is equal to b and both have similar data type<br/>";
         }else {
            echo "TEST7 : a is not equal to b and they do not have the similar data type <br/>";
         }
//Logical Operator
echo "Logical Operators"."<br>";
	 $a = 42;
	 $b = 0;
         
         if( $a && $b ) {
            echo "TEST1 : Both a and b are true<br/>";
         }else{
            echo "TEST1 : Either a or b is false<br/>";
         }
         
         
         
         if( $a || $b ) {
            echo "TEST2 : Either a or b is true<br/>";
         }else
	{
            echo "TEST2 : Both a and b are false<br/>";
         }
         
        
	if( !$b ) {
            echo "TEST3 : b is true <br/>";
         }else {
            echo "TEST3 : b  is false<br/>";
         }



// Bitwise operators

$bitwise_and = (5 & 3);     // And
$bitwise_or = (5 | 3);      // Or
$bitwise_xor = (5 ^ 3);     // Xor
$bitwise_not = (~5);        // Not
$left_shift = (5 << 2);     // Left shift
$right_shift = (5 >> 2);    // Right shift
echo "Bitwise Operators: $bitwise_and, $bitwise_or, $bitwise_xor, $bitwise_not, $left_shift, $right_shift<br>";


// String operators

$string_concatenation = "Hello " . "World!";  // Concatenation
echo "String Operators: $string_concatenation<br>";


// Array operators

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array_union = $array1 + $array2;    // Union
$array_equality = ($array1 == $array2);   // Equality
$array_identity = ($array1 === $array2);  // Identity
$array_inequality = ($array1 != $array2); // Inequality
$array_not_identical = ($array1 !== $array2); // Not identical to
echo "Array Operators: Union: ";
print_r($array_union);
echo ", Equality: $array_equality, Identity: $array_identity, Inequality: $array_inequality, Not Identical: $array_not_identical";


//Type Operators

// Declare variables of different types
$var1 = 10;
$var2 = "Hello";
$var3 = 3.14;
$var4 = true;

// Check the type of each variable

echo '$var1 is an integer: ' . (is_int($var1) ? 'true' : 'false') . PHP_EOL."<br>";
echo '$var2 is a string: ' . (is_string($var2) ? 'true' : 'false') . PHP_EOL."<br>";
echo '$var3 is a float: ' . (is_float($var3) ? 'true' : 'false') . PHP_EOL."<br>";
echo '$var4 is a boolean: ' . (is_bool($var4) ? 'true' : 'false') . PHP_EOL."<br>";


?>