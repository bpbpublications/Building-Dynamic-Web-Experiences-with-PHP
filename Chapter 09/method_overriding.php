<?php

// Parent class
class Animal {
    // Method to be overridden
    public function makeSound() {
        return "Animal sound";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    // Overriding the method
    public function makeSound() {
        return "Woof!";
    }
}

// Create instances of both parent and child classes
$animal = new Animal();
$dog = new Dog();

// Call the overridden method on both instances
echo $animal->makeSound(); // Output: Animal sound
echo $dog->makeSound();    // Output: Woof!
?>