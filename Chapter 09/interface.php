<?php

// Define an interface
interface Shape {
    public function calculateArea();
}

// Define a class that implements the Shape interface
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the method defined in the interface
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Define another class that implements the Shape interface
class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Implementing the method defined in the interface
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Create instances of classes implementing the Shape interface
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Call the calculateArea() method on different objects
echo "Area of Circle: " . $circle->calculateArea() . "\n";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";
?>