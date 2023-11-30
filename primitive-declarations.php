<?php

// Variable declaration
$firstStr = "Hello, world!";
$firstEscapeStr = "This is a string with a\nnew line break.";
$firstBool = true;
$firstInteger = 42;
$firstFloat = 3.14;
$firstNull = NULL;
$firstArray = array(2, NULL, 'Hi', 5.5, false);


echo "firstStr: $firstStr\n";
echo "firstEscapeStr: $firstEscapeStr\n";
echo "firstBool: " . ($firstBool ? "true" : "false") . "\n";
echo "firstInteger: $firstInteger\n";
echo "firstFloat: $firstFloat\n";
echo "firstNull: $firstNull\n";
echo "firstArray: ";
print_r($firstArray);

?>
