<?php
$nbrRicard = 1;

do {
    echo "Come on ricard number $nbrRicard\n";

    if ($nbrRicard == 3) {
        echo "I'll have to stop soon!\n";
        break;
    } elseif ($nbrRicard == 5) {
        echo "I am no longer very fresh...\n";
        break;
    }

    $nbrRicard++;

} while ($nbrRicard <= 7);
?>