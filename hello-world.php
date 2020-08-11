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

// Comments in PHP. // is used for a one-line comment.
# we can also use bash-style one-line comments ("#").
/* We can also 
do multi-line comments
    by
        using
        asterisk and slash, like we did in previous language!
*/

//Data-types.
$myString = 'This is a string'; // String.
$myTrueBoolean = TRUE; // Boolean.
$myFalseBoolean = false; // Boolean.
$myInt = 42; // Integer.
$myFloat = 3.14; // Decimal value (float / double.)
$myNull = null;
$myArray = [ 1, 2, 3, 4, 5, 'test', false, null ]; // Array (can be created using the [] OR array() syntaxes.)
$mySecondArray = array( 
    $myString,
    $myTrueBoolean,
    $myFalseBoolean,
    $myInt,
    $myFloat,
    $myNull,
    $myArray
);
$myObject = new stdClass(); //BASIC standard/generic object    
$myObject->name = "Bob";
$myObject->age = 36;
$myObject->hobbies = ["programming", "skydiving"];
echo "Hello,my name is {$myObject->name}.\n I am {$myObject->age} years old.\n I enjoy the following activities:"; // Oh, we'll need  to loop through our array of hobbies!

// Foreach works almost identically to "for...of" in JavaScript!
foreach ( $myObject->hobbies as $hobby ) // Note : $hobby in this case represents the current iterated item in the array. Can be any variable name.
{
    echo "\n - $hobby";
}

echo "\n\n Let's try a \"for\" loop!";
for ($iterator = 0; $iterator < 8; $iterator = $iterator + 2 )
{
    echo "\n Current value in loop: $iterator";
}

// Find the Length of the Array we use count();
$myArrayLength = count( $myArray );
echo "\n\n The variable \$myArray contains $myArrayLength items.";

echo "\n\n" // new lines!
// While loop
?>While Loop:<?php
$myI = 10;
while ( $myI >= -35 ) {
    
    echo "\n - While loop current value = $myI";
    $myI -= 5; // Same as typing...
               // SmyI = $myI -5;
}

// Arrays 
echo "\n\n Arrays again...\n\n";
echo 'The First item in $mySecondArray is:' . $mySecondArray[0];

echo "\n\n Instead of indexed arrays, we can also use associative arrays.\n That is to say: arrays with key-value pairs!\n\n";
$myAssociativeArray = array( // Associative Arrays have keys AND  values.
    'name' => 'Bob',
    'Age' => '23',
    'hobbies' => [ "Swimming", "Golf"] // Indexed arrays have index numbers and values.
);
echo "{$myAssociativeArray['name']} is {$myAssociativeArray['Age']} years old.";
echo "\n His second Hobby is : {$myAssociativeArray['hobbies'][1]}!";

echo "\n\n Looping through an associative (or any) array.\n\n";
foreach ( $myAssociativeArray as $myKey => $myValue)
{
    if( !is_array( $myValue ) )
    {
        echo "\n The Associative key \"$myKey\" is assigned the value: $myValue\n";
    }
    else{
        foreach ( $myValue as $hobby ) 
        {
            echo "\n One of the $myKey is: $hobby";
        }
    }
    
}