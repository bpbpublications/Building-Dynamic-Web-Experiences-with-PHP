<?php
// Define a class
class Dog {
    // Properties
    public $name;
    public $breed;
    public $age;

    // Constructor
    public function __construct($name, $breed, $age) {
        $this->name = $name;
        $this->breed = $breed;
        $this->age = $age;
    }

    // Method
    public function bark() {
        echo "Woof! My name is " . $this->name . ".<br>";
    }
}

// Create an object of the class
$dog1 = new Dog("Max", "Labrador", 3);

// Access object properties and methods
echo "Dog Name: " . $dog1->name . "<br>";
echo "Dog Breed: " . $dog1->breed . "<br>";
echo "Dog Age: " . $dog1->age . "<br>";

// Call object method
$dog1->bark();
?>