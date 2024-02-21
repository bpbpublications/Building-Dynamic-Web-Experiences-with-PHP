<?php
// Define a class
class MyClass {
    // Constructor
    public function __construct() {
        echo "Object initialized.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Object destroyed.<br>";
    }
}

// Create an object of the class
$obj = new MyClass();

// Output:
// Object initialized.

// Unset the object
unset($obj);

// Output:
// Object destroyed.
?>