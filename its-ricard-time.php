<?php

$nbrRicard = 1; // Initialize the variable

do {
    // Display message before each ricard
    echo "Come on ricard number " . $nbrRicard . PHP_EOL;

    // Check conditions for special messages
    if ($nbrRicard == 3) {
        echo "I'll have to stop soon!" . PHP_EOL;
    } elseif ($nbrRicard == 5) {
        echo "I am no longer very fresh ..." . PHP_EOL;
    } elseif ($nbrRicard == 7) {
        break; // Stop the loop at the 7th ricard
    }

    // Increment the number of ricard
    $nbrRicard++;

} while ($nbrRicard <= 7);
