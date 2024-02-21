<?php

// Define a final class
final class FinalClass {
    public function sayHello() {
        echo "Hello from FinalClass!\n";
    }
}

// Attempting to extend a final class will result in a fatal error
/*
class SubClass extends FinalClass {
    // Error: Cannot extend final class FinalClass
}
*/

// Create an instance of the final class and call its method
$finalObject = new FinalClass();
$finalObject->sayHello(); 
?>
