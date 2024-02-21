<?php
$globalVar = 10;
function myFunction() {
    // Accessing global variable inside the function
    global $globalVar;
    echo "Inside function:" . $globalVar."\n";
}
echo "Outside function: " . $globalVar."\n"; 
myFunction(); 
?>