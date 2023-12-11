<?php

foreach (range('A', 'Z') as $letter) {
    echo $letter;
    if ($letter !== 'Z') {
        echo ' | ';
    }
}

echo PHP_EOL;
?>