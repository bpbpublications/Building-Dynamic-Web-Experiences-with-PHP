<?php

// Define a class
class MyClass {
    
    // Method with variable-length arguments
    public function overloadedMethod(...$args) {
        $numArgs = count($args);
        if ($numArgs == 1) {
            echo "Method with one argument called. Argument: {$args[0]}\n";
        } elseif ($numArgs == 2) {
            echo "Method with two arguments called. Arguments: {$args[0]}, {$args[1]}\n";
        } else {
            echo "Invalid number of arguments\n";
        }
    }
}

// Create an instance of the class
$obj = new MyClass();

// Call the overloaded method with different arguments
$obj->overloadedMethod("Argument1");
$obj->overloadedMethod("Argument1", "Argument2");
$obj->overloadedMethod("Argument1", "Argument2", "Argument3");
