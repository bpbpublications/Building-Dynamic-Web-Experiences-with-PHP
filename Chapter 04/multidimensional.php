<?php

// Creating a 2D array
$twoDArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "2D Array:\n";
// Printing the 2D array
foreach ($twoDArray as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "\n";
}

// Creating a 3D array
$threeDArray = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    )
);

echo "<br>"."\n3D Array:\n";
// Printing the 3D array
foreach ($threeDArray as $array2D) {
    foreach ($array2D as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "\n";
    }
    echo "\n";
}
?>