<?php

// Function to capitalize the entire string
function capsMe(string $str): string {
    return mb_strtoupper($str);
}

// Function to convert the entire string to lowercase
function lowerMe(string $str): string {
    return mb_strtolower($str);
}

// Function to capitalize the first letter of each word
function upperCaseFirst(string $str): string {
    return ucwords($str);
}

// Function to lowercase the first letter of each word
function lowerCaseFirst(string $str): string {
    return preg_replace_callback('/\b\w/', function($matches) {
        return mb_strtolower($matches[0]);
    }, $str);
}

// Function to remove spaces before the first word and after the last word
function removeBlankSpace(string $str): string {
    return trim($str);
}

// Test the functions
$string = "   hello world   ";
echo capsMe($string) . PHP_EOL;          // Output: "   HELLO WORLD   "
echo lowerMe($string) . PHP_EOL;         // Output: "   hello world   "
echo upperCaseFirst($string) . PHP_EOL;  // Output: "   Hello World   "
echo lowerCaseFirst($string) . PHP_EOL;  // Output: "   hello world   "
echo removeBlankSpace($string) . PHP_EOL; // Output: "hello world"

$anotherString = "YeaH BaBe";
echo lowerCaseFirst($anotherString) . PHP_EOL; // Output: "yeaH baBe"
