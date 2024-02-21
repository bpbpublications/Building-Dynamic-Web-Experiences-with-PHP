<?php

class MyClass {
    public $publicVar = "I'm a public variable";
    private $privateVar = "I'm a private variable";
    protected $protectedVar = "I'm a protected variable";
    
    public function getPrivateVar() {
        return $this->privateVar;
    }
    
    public function getProtectedVar() {
        return $this->protectedVar;
    }
}

// Creating an instance of MyClass
$obj = new MyClass();

// Accessing public variable
echo "Public variable: " . $obj->publicVar . "<br>";

// Trying to access private and protected variables directly (will cause an error)
// echo "Private variable: " . $obj->privateVar;
// echo "Protected variable: " . $obj->protectedVar;

// Accessing private and protected variables through methods
echo "Private variable (via method): " . $obj->getPrivateVar() . "<br>";
echo "Protected variable (via method): " . $obj->getProtectedVar() . "<br>";
?>