<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function getTotalX($n, $arr, $m, $brr) {
    // Write your code here
    $counter = 0;
    
    for ($i = $arr[ 0 ] ; $i <= $brr[ $m - 1 ] ; $i++) { 
        $tag = false;

        $tag = itemDivided($i, $arr);

        if ( $tag ) {
            $tag = itemDivisor( $i, $brr);
            
            if ( $tag ) {
                $counter++;
            }
        }
    }
   
    return $counter;
}

function itemDivided($item, $arr) {
    foreach ($arr as $value) {
        if ( $item % $value != 0) {
            return false;
        }
    }

    return true;
}

function itemDivisor($item, $arr) {
    foreach ($arr as $value) {
        if ( $value % $item != 0) {
            return false;
        }
    }

    return true;
}

$fptr = fopen(("output.txt"), "w");

$firstMultipleInput = explode( ' ', rtrim( fgets( STDIN ) ) );
$n = intval( $firstMultipleInput[0] );
$m = intval( $firstMultipleInput[1] );

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));

$barrTemp = rtrim( fgets( STDIN ) );
$brr = array_map('intval', preg_split('/ /', $barrTemp, -1, PREG_SPLIT_NO_EMPTY));

$result = getTotalX($n, $arr, $m, $brr);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
