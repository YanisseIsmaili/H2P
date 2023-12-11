<?php

function isPangram(string $sentence): bool {

    $sentence = strtolower($sentence);

    foreach (range('a', 'z') as $letter) {
        if (strpos($sentence, $letter) === false) {
            return false;
        }
    }

    return true;
}

$pangramSentence = "The quick brown fox jumps over the lazy dog.";
$nonPangramSentence = "This is not a pangram.";

echo isPangram($pangramSentence) ? "Pangram!\n" : "Not a pangram.\n";
echo isPangram($nonPangramSentence) ? "Pangram!\n" : "Not a pangram.\n";