<?php

function capsMe(string $str): string {
    return strtoupper($str);
}

function lowerMe(string $str): string {
    return strtolower($str);
}

function upperCaseFirst(string $str): string {
    return ucwords($str);
}

function lowerCaseFirst(string $str): string {
    return lcfirst(ucwords($str));
}

function removeBlankSpace(string $str): string {
    return trim($str);
}

// Test the functions
$string = "   hello world   ";
echo capsMe($string) . PHP_EOL;          
echo lowerMe($string) . PHP_EOL;         
echo upperCaseFirst($string) . PHP_EOL;  
echo lowerCaseFirst($string) . PHP_EOL;  
echo removeBlankSpace($string) . PHP_EOL; 
