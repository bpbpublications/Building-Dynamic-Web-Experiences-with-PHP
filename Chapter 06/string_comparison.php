<?php
$string1 = "apple";
$string2 = "banana";

// Using comparison operators
if ($string1 == $string2) {
    echo "The strings are equal.\n";
} else {
    echo "The strings are not equal.\n";
}

// Case-insensitive comparison
if (strcasecmp($string1, $string2) == 0) {
    echo "The strings are equal (case-insensitive comparison).\n";
} else {
    echo "The strings are not equal (case-insensitive comparison).\n";
}
?>