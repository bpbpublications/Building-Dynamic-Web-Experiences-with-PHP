<?php
// Define a class
class MyClass {
    // Public property
    public $name;

    // Public method
    public function greet() {
        return "Hello, " . $this->name . "!";
    }
}

// Create an object of the class
$obj = new MyClass();

// Access and modify public property
$obj->name = "John";

// Call public method
echo $obj->greet(); // Output: Hello, John!
?>