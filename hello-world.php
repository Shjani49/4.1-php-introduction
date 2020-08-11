Hello,World! <?php // This is a comment. We are testing this file in command-line! ?>
More Text!
<?php
// Echo is used to output evaluations as a string (if Possible.)
echo 'This is my standard Hello World Test using "echo" .';

// Variables in PHP are marked with $.
// Variables Names can not start with a number.
// Variable names Are case-sensitive.
$myString = 'Hello, this is a string!';
echo( $myString );
// Re-assignment is as simple as assigning again. 
$myString = 'My String is now Changed!';
echo $myString;

// Difference between single and double quotes.
$mySingleQuoteString = 'This is single quotes:\n' . $myString; // "." is used for concatenation.
echo $mySingleQuoteString;
echo "\n\n"; //NewLines!
$myDoubleQuoteString = "\n\n This is a double quotes String:\n $myString"; //Double quotes let us inject variables right inside our string!
echo $myDoubleQuoteString;