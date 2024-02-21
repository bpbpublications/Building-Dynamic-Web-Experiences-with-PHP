<?php
// Parent class
class Animal {
    // Properties
    protected $name;
    protected $sound;

    // Constructor
    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    // Method
    public function makeSound() {
        return $this->sound;
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    // Method specific to Dog
    public function wagTail() {
        return $this->name . " is wagging its tail.";
    }
}

// Create objects of the classes
$animal = new Animal("Generic Animal", "Some sound");
$dog = new Dog("Buddy", "Woof");

// Access methods from the parent class
echo $animal->makeSound() . "<br>";
// Access methods from the child class
echo $dog->makeSound() . "<br>";    
echo $dog->wagTail();               
?>