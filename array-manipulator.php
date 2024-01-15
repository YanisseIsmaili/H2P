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

/* print("test 1 : reverse\n");
print_r(reverse([1, 2, 3])); // [3, 2, 1]
print("\ntest 2 : push\n");
$tab = [];
print_r(push($tab, "first", "second", "five")); // 3
print("\ntest 3 : sum\n");
print_r(sum([1, 2, 3])); // 6
print("\ntest 4 : contains\n");
$tab2 = [1, 2, 3];
print_r(arrayContains($tab2, 1)); // 2
print("\ntest 5 : merge\n");
print_r(merge([1, 2, 3], [4, 5, 6], [7, 8, 9])); // [1, 2, 3, 4, 5, 6, 7, 8, 9] */
$tab = [];
print_r(push($tab, "first", "second", "five", "10"));
print_r($tab);