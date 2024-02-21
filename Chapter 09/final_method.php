<?php

// Define a class
class ParentClass {
    // Define a final method
    final public function finalMethod() {
        echo "This is a final method.\n";
    }

    // This method can be overridden since it's not final
    public function regularMethod() {
        echo "This is a regular method.\n";
    }
}

// Define a subclass
class ChildClass extends ParentClass {
    // Attempting to override a final method will result in a fatal error
    /*
    public function finalMethod() {
        echo "Attempting to override a final method.\n";
    }
    */

    // This method overrides the regular method in the parent class
    public function regularMethod() {
        echo "This method overrides the regular method in the parent class.\n";
    }
}

// Create an instance of the child class
$childObject = new ChildClass();

// Call final and regular methods
$childObject->finalMethod();    
$childObject->regularMethod();  
?>
