<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function divisiblePairSum( $n, $arr, $d ) {
    // Write your code here
    $counter = 0;
    
    for( $i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n; $j++) {
            if ( ($i < $j) && (( $arr[$i] + $arr[$j] ) % $d == 0 ) ) {
                $counter++;
            }
        }
    }

    return $counter;
}



$fptr = fopen(("output.txt"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);
$dividedBy = intval($first_multiple_input[1]);

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisiblePairSum( $n, $arr, $dividedBy );

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
