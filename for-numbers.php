<?php

echo "2"; // 2 is the first prime number

for ($num = 3; $num < 100; $num += 2) {
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) continue 2;
    }

    echo ", $num";
}
echo PHP_EOL;
?>