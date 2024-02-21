<?php
// Define a class
class MyClass {
    // Private property
    private $password;

    // Constructor
    public function __construct($password) {
        $this->password = $password;
    }

    // Private method
    private function displayPassword() {
        return "Password: " . $this->password;
    }

    // Public method to display password
    public function getPassword() {
        return $this->displayPassword();
    }
}

// Create an object of the class
$obj = new MyClass("secretpassword");

// Access private property (not allowed)
// echo $obj->password;  // This will cause an error

// Access private method (not allowed)
// echo $obj->displayPassword();  // This will cause an error

// We can still access and modify private properties and methods within the class
echo $obj->getPassword();  // Output: Password: secretpassword
?>