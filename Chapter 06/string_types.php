<?php

// Single-quoted string
$string1 = 'This is a single-quoted string.';
echo "Single-quoted string: $string1"."<br>";

// Double-quoted string
$string2 = "This is a double-quoted string.";
echo "Double-quoted string: $string2"."<br>";

// Heredoc string
$string3 = <<<EOD
This is a heredoc string.
It can span multiple lines.
EOD;
echo "Heredoc string: $string3"."<br>";

// Nowdoc string
$string4 = <<<'EOD'
This is a nowdoc string.
It behaves like a single-quoted string.
EOD;
echo "Nowdoc string: $string4";

?>
