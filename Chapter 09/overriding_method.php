<?php

// Parent class
class Animal {
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to be overridden
    public function makeSound() {
        echo "Animal sound\n";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    private $breed;

    // Constructor
    public function __construct($name, $breed) {
        parent::__construct($name); // Calling parent constructor
        $this->breed = $breed;
    }

    // Overriding the method
    public function makeSound() {
        echo "Woof!\n";
    }
}

// Creating instances of both parent and child classes
$animal = new Animal("Generic Animal");
$dog = new Dog("Buddy", "Labrador");

// Calling the overridden method on both instances
$animal->makeSound(); 
$dog->makeSound();    

