<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function migratoryBirds( $n, $arr ) {
    // Write your code here
    $storeArray = [];
    
    for( $i = 0; $i < $n; $i++) {
        
        if ( array_key_exists( $arr[$i], $storeArray) ) {
            $storeArray[$arr[$i]]++;
        } else {
            $storeArray[ $arr[$i] ] = 1;
        }
    }
    
    arsort( $storeArray );
    $mostFrequentValue = array_values( $storeArray )[0];
    $birdsValue = array_keys( $storeArray, $mostFrequentValue );

    if ( sizeof( $birdsValue ) > 1 ) {
        asort( $birdsValue );
    }

    return array_values( $birdsValue )[0];
}



$fptr = fopen(("output.txt"), "w");

$n = rtrim(fgets(STDIN));

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds( $n, $arr );

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
