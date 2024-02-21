<?php
// Define a class
class Car {
    // Properties
    public $brand;
    public $model;
    public $year;

    // Constructor
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Method
    public function displayInfo() {
        echo "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year . "<br>";
    }
}

// Create objects
$car1 = new Car("Toyota", "Camry", 2020);
$car2 = new Car("Honda", "Civic", 2019);

// Access object properties and methods
echo "Car 1 Information: ";
$car1->displayInfo();

echo "Car 2 Information: ";
$car2->displayInfo();
?>