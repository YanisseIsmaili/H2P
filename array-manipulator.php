<?php
function reverse(?array $a = null): array 
{
    $res = array();
    for ($i = count($a) - 1; $i >= 0; $i--) {
        array_push($res, $a[$i]);
    }
    return $res;
}

function push(?array &$array = null, mixed ...$values): int
{
    if ($array === null) {
        return 0;
    }

    $array = array_merge($array, $values);

    $c = count($array);
    return ($c);
}

function sum(?array $array = null): int
{
    if ($array === null) {
        return 0;
    }

    $res = 0;
    for ($i = 0; $i < count($array); $i++) {
        $res += $array[$i];
    }
    return $res;
}

function arrayContains(?array $array, int|string|float $to_find): mixed
{
    if ($array === null) {
        return "Nothing";
    }

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $to_find) {
            return $array[$i];
        }
    }
    return "Nothing";
}

function merge(?array $array1 = null, array $array2, array $array3): array
{
    if ($array1 === null) {
        return [];
    }
    $res = array();
    for ($i = 0; $i < count($array1); $i++) {
        array_push($res, $array1[$i]);
    }
    for ($i = 0; $i < count($array2); $i++) {
        array_push($res, $array2[$i]);
    }
    for ($i = 0; $i < count($array3); $i++) {
        array_push($res, $array3[$i]);
    }

    $res = array_unique($res);

    return $res;
}

$tab = [];
print_r(push($tab, "first", "second", "five", "10"));
print_r($tab);