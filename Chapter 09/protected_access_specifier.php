<?php
// Define a class
class MyClass {
    // Protected property
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Protected method
    protected function displayName() {
        return "My name is " . $this->name;
    }
}

// Create an object of the class
$obj = new MyClass("John");

// Access protected property (not allowed)
// echo $obj->name;  // This will cause an error

// Access protected method (not allowed)
// echo $obj->displayName();  // This will cause an error

// We can still access and modify protected properties and methods within the class
echo $obj->displayName();  // 