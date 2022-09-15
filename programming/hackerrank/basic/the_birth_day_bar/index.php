<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function subArrayDivision($n, $arr, $d, $m) {
    // Write your code here
    $storeArray = [];
    $counter = 0;
    
    for ($i = 0; $i < $n; $i++) { 
        $sum = 0;
        $partialArray = [];

        if ( $i <= ($n - $m) ){
            for ($j = $i; $j < ($i + $m); $j++) { 
                $partialArray[$i][] = $arr[$j];
                $sum = $sum + $arr[$j];
            }
    
            if ( !in_array( $partialArray, $storeArray )) {
                
                if ( $d == $sum ) {
                    $counter++;
                    $storeArray[] = $partialArray[$i];
                }
            }
        }
        
    }
    return $counter;
}


$fptr = fopen(("output.txt"), "w");

$n = intval( rtrim( fgets( STDIN ) ) );

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);


$result = subArrayDivision($n, $arr, $d, $m);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
