<?php

// Define an abstract class
abstract class Shape {
    protected $color;

    // Constructor
    public function __construct($color = 'black') {
        $this->color = $color;
    }

    // Abstract method to calculate area, to be implemented by subclasses
    abstract public function calculateArea();

    // Concrete method
    public function getColor() {
        return $this->color;
    }
}

// Define a subclass of the abstract class
class Circle extends Shape {
    private $radius;

    // Constructor
    public function __construct($radius, $color = 'black') {
        parent::__construct($color);
        $this->radius = $radius;
    }

    // Implement abstract method to calculate area for a circle
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Create an instance of the subclass
$circle = new Circle(5, 'red');

// Call methods
echo "Color: " . $circle->getColor() . "\n";
echo "Area: " . $circle->calculateArea() . "\n";
?>