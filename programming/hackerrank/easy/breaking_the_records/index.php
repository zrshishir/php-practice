<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function breakingRecords($n, $arr) {
    // Write your code here
    $minVal = $arr[0];
    $minCounter = 0;
    $maxVal = $arr[0];
    $maxCounter = 0;


    for ($i = 0; $i < $n; $i++) { 
        if ( $minVal > $arr[$i] ) {
            $minCounter++;
            $minVal = $arr[$i];
        }

        if ( $maxVal < $arr[$i] ) {
            $maxCounter++;
            $maxVal = $arr[$i];
        }
    }
    
    return [$maxCounter, $minCounter];
}

$fptr = fopen(("output.txt"), "w");

$n = intval( rtrim( fgets( STDIN ) ) );

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));


$result = breakingRecords($n, $arr);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
