<?php
// Define a class
class Product {
    // Private properties
    private $name;
    private $price;

    // Constructor
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }

    // Setter method for name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter method for price
    public function getPrice() {
        return $this->price;
    }

    // Setter method for price
    public function setPrice($price) {
        $this->price = $price;
    }
}

// Create an object of the class
$product = new Product("Phone", 500);

// Get and display initial values
echo "Initial Product Name: " . $product->getName() . "<br>";
echo "Initial Product Price: $" . $product->getPrice() . "<br>";

// Set new values using setter methods
$product->setName("Laptop");
$product->setPrice(1000);

// Get and display updated values
echo "Updated Product Name: " . $product->getName() . "<br>";
echo "Updated Product Price: $" . $product->getPrice() . "<br>";
?>