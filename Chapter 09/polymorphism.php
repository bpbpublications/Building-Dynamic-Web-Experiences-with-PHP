<?php

// Define a superclass
class Animal {
    public function makeSound() {
        return "Animal sound";
    }
}

// Define subclasses inheriting from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Function to output sound of any animal
function outputSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

// Create instances of different subclasses
$dog = new Dog();
$cat = new Cat();

// Call the function with different types of objects
outputSound($dog); 
outputSound($cat); 
?>
