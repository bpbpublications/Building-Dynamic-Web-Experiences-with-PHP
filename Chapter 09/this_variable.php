<?php

// Define a class
class MyClass {
    public $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to display the name
    public function displayName() {
        echo "My name is {$this->name}\n";
    }

    // Method to update the name
    public function updateName($newName) {
        $this->name = $newName;
        echo "Name updated successfully!\n";
    }
}

// Create an instance of the class
$obj = new MyClass("John");

// Access properties and methods using $this
$obj->displayName(); // Output: My name is John
$obj->updateName("Alice");
$obj->displayName(); // Output: My name is Alice
