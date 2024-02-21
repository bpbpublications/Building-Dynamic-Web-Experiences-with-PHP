<?php

// Parent class
class Animal {
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        echo "Animal constructor called. Name: {$this->name}\n";
    }

    // Method
    public function eat() {
        echo "{$this->name} is eating.\n";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    private $breed;

    // Constructor
    public function __construct($name, $breed) {
        parent::__construct($name); // Calling parent constructor
        $this->breed = $breed;
        echo "Dog constructor called. Breed: {$this->breed}\n";
    }

    // Method
    public fun
