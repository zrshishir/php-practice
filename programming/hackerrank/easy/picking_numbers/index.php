<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function pickingNumbers($n, $arr) {
    // Write your code here
    $picking_numbers = 0;
    $result = 0;
    $restore_arr = [];
    sort($arr);
    
    foreach (array_count_values($arr) as $val => $count) {
        $chunk = array_fill(0, $count, $val); // contains [1, 1], [2, 2], etc.
        
        if(sizeof($restore_arr) > 0 && ($chunk[0] - $restore_arr[0] == 1)) {
            $picking_numbers = $picking_numbers + sizeof($chunk);
            
        } else {
            $result = $picking_numbers >= $result ? $picking_numbers : $result;
            $picking_numbers = 0;
            $picking_numbers = sizeof($chunk);
            $restore_arr = $chunk;
            
        }

    }

    return $picking_numbers >= $result ? $picking_numbers : $result;
}

$fptr = fopen(("output.txt"), "w");

$n = intval( rtrim( fgets( STDIN ) ) );

$arrTemp = rtrim( fgets( STDIN ) );
$arr = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));


$result = pickingNumbers($n, $arr);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
