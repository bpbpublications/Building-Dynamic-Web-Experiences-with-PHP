<?php
// Define a class
class Person {
    // Properties
    public $name;
    public $age;

    // Creating a Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method
    public function greet() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.<br>";
    }
}

// Create an object of the class
$person1 = new Person("John", 30);

// Access object properties and call method
$person1->greet();

// Create another object of the class
$person2 = new Person("Jane", 25);

// Access object properties and call method
$person2->greet();
?>