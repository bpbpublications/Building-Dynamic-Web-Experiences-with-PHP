<?php

// Writing to a file (creates a new file or overwrites an existing one)
$file1 = fopen("file1.txt", "w");
fwrite($file1, "Hello, World!");
fclose($file1);


// Appending to a file (creates a new file if it doesn't exist)
$file2 = fopen("file2.txt", "a");
fwrite($file2, "Appending some text.");
fclose($file2);


// Reading from a file
$file3 = fopen("file1.txt", "r");
echo fread($file3, filesize("file1.txt"));
fclose($file3);


// Reading and writing to a file (starts at the beginning of the file)
$file4 = fopen("file3.txt", "r+");
fwrite($file4, "Overwriting existing content.");
fclose($file4);


// Reading and writing to a file (starts at the end of the file)
$file5 = fopen("file4.txt", "a+");
fwrite($file5, "Appending some text.");
fclose($file5);

?>