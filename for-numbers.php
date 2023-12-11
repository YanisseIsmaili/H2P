<?php

echo "2"; // 2 is the first prime number

for ($num = 3; $num < 100; $num += 2) {
    $isPrime = true;

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo ", " . $num;
    }
}
echo PHP_EOL;
?>
