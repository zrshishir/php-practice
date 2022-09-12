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
    
    for ($i = $arr[ $n - 1 ] ; $i <= $brr[ $m - 1 ] ; $i++) { 
        $tag = false;

        foreach( $arr as $value ) {
            if ( $i % $value != 0 ) {
                $tag = false;
                break;
            } else {
                $tag = true;
            }
        }

        foreach( $brr as $vl ) {
            if ( $vl % $i != 0) {
                $tag = false;
                break;
            } else {
                $tag = true;
            }
        }

        if ( $tag ) {
            $counter++;
        }
    }
   
    return $counter;
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
var_dump($result);
fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
