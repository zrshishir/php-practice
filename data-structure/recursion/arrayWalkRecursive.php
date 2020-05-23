<?php 

function arraySumRecursive(Array $array){
    $sum = 0; 
    array_walk_recursive($array, function($v) use(&$sum){
        $sum += $v;
    });
    return $sum;
}

$arr = [1, 2, 3, 4, 5, [6, 7, [8, 9, 10, [11, 12, 13, [14, 15, 16]]]]];

echo arraySumRecursive($arr) . "\n";

//array_marge_recursive and array_replace_recursive