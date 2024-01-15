<?php
function searchWord(array $board,string $word) : bool {
    $split_word = str_split($word);
    $cpt = 0;
    if (array_unique($split_word) !== $split_word) {
        return false;
    }
    $board = array_merge(...$board);
    foreach($split_word as $letter){
        if (in_array($letter, $board)) {
            $cpt += 1;
        }
    }
    if ($cpt === strlen($word)) {
        return true;
    }
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

function searchWord(array $array, string $word){

}

?>