<?php
// String Data Type
$stringVar = "Hello, PHP!";
echo "String Value: $stringVar <br>";

// Integer Data Type
$integerVar = 123;
echo "Integer Value: $integerVar <br>";

// Float Data Type
$floatVar = 3.14;
echo "Float Value: $floatVar <br>";


// Boolean Data Type
$boolVar = true;
echo "Boolean Value: " . ($boolVar ? "true" : "false") . "<br>";

// Array Data Type
$arrayVar = array(1, 2, 3);
echo "Array: ";
print_r($arrayVar);
echo "<br>";

// Object Data Type
class MyClass {
    public $property;
}

$objectVar = new MyClass();
$objectVar->property = "Object value";

echo "Object: " . $objectVar->property . "<br>";

// NULL Data Type
$nullVar = null;
echo "NULL : " . var_export($nullVar, true) . "<br>";

// Resource Data Type

// Opening a file
$fileHandle = fopen("example.txt", "r");

// Check if file opened successfully
if ($fileHandle === false) {
    echo "Failed to open file.";
} else {
    echo "File opened successfully.";
}

// Closing the file handle
fclose($fileHandle);

?>