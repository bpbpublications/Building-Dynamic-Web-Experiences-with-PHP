<?php

function increment() {
    static $count = 0; // Static variable
    $count++;
    echo "Count: " . $count . "<br>";
}

// Calling the function multiple times
increment(); // Output: Count: 1
increment(); // Output: Count: 2
increment(); // Output: Count: 3
?>