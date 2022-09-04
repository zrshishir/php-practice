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
            // echo $a[$i][($j + 2)];
            // $sum = $a[$i][$j] + $a[$i][($j + 1)] + ($a[$i][($j + 2)]);
            $sum = $a[$i][$j] + $a[$i][($j + 1)] + $a[$i][($j + 2)] + $a[($i + 1)][($j + 1)] + $a[($i + 2)][$j] + $a[($i + 2)][($j + 1)] + $a[($i + 2)][($j + 2)] ;
            // var_dump($j + 1);
            // echo '[' . $i. '][' . $j . "], " . '[' . $i. '][' . ($j + 1). "], " . '[' . $i. '][' . ($j + 2) . "], " . '[' . ($i + 1). '][' . ($j + 1) . "], ";
        }
        echo $sum . "\n";
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
