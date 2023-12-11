<?php

// Function to reverse a string
function reverse(string $str): string {
    return strrev($str);
}

// Function to check if a string is a palindrome
function isPalindrome(string $str): bool {
    // Remove spaces and convert to lowercase for case-insensitive comparison
    $cleanedStr = strtolower(str_replace(' ', '', $str));

    // Check if the cleaned string is equal to its reverse
    return $cleanedStr === reverse($cleanedStr);
}

// Test the functions
$normalString = "hello";
$reversedString = reverse($normalString);
$palindromeString = "A man a plan a canal Panama";
$nonPalindromeString = "not a palindrome";

echo "Original String: $normalString\n";
echo "Reversed String: $reversedString\n";

echo isPalindrome($palindromeString) ? "Palindrome!\n" : "Not a palindrome.\n"; // Output: Palindrome!
echo isPalindrome($nonPalindromeString) ? "Palindrome!\n" : "Not a palindrome.\n"; // Output: Not a palindrome.
