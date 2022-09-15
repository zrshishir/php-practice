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
    $output = 0;
    $minVal = PHP_INT_MIN;
    
    for( $i = 0; $i < $n; $i++) {
        
        if ( !isset($storeArray[$arr[$i]] ) ) {
            $storeArray[$arr[$i]] = 0;
        }

        $storeArray[$arr[$i]]++;
    }

    foreach ($storeArray as $key => $value) {
        
        if ( $minVal < $value ) {
            $minVal = $value;
            $output = $key;
        }
    }

    return $output;
}



$fptr = fopen(("output.txt"), "w");

$n = rtrim(fgets(STDIN));

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds( $n, $arr );

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
