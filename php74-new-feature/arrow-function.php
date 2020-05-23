<?php 
// php 7.4;
// $a = [1, 2, 3, 4, 5];
// $b = array_map(fn($n) => $n * $n * $n, $a);
// print_r($b);

function cube(int $n): int{
    return $n * $n * $n ;
}

$a = [1, 2, 3, 4, 5];

$b = array_map('cube', $a);
print_r($b);