<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function rotateLeft($n, $d, $arr) {
    // Write your code here
    $remaining = array_slice($arr, $d);
    array_splice($arr, $d);
    return array_merge($remaining,$arr);
}



$fptr = fopen("output.txt", "w");

$file = fopen("input.txt", "r");

$line = fgets($file);
$first_line_input = explode(' ', $line);

$n = intval($first_line_input[0]);
$d = intval($first_line_input[1]);
$arr = array();

while (!feof($file)) {
    $arr = explode( ' ', fgets( $file ) );
}

$result = rotateLeft($n, $d, $arr);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
