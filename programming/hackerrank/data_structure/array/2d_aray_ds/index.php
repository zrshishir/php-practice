<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function hourGlassSum($a) {
    // Write your code here
    $array_length = sizeof($a);
    for ($i=0; $i < $array_length - 2; $i++) { 
        $sum = 0;
        for($j=0; $j < $array_length - 2; $j++) {
            // $sum = $a[$i][$j] + $a[$i][$j + 1] + $a[$i][$j + 2] ;
            echo '[' . $i . '][' . $j . "], ";
        }
        echo "\n";
    }
}

$fptr = fopen("output.txt", "w");

$file = fopen("input.txt", "r");

$arr = array();
while (!feof($file)) {
    $arr[] = explode( ' ', fgets( $file ) );
}

$result = hourGlassSum($arr);

fwrite($fptr, print_r( $result, true ) );
fclose($fptr);
