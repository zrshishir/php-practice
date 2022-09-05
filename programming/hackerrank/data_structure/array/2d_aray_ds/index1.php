<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function hourGlassSum($arr) {
    // Write your code here
    $array_length = sizeof($arr);
    $output = '';
    for ($i=0; $i < $array_length - 2; $i++) { 
        
        for($j=0; $j < $array_length - 2; $j++) {
            $sum = intval($arr[$i][$j]) + intval($arr[$i][$j + 1]) + intval($arr[$i][$j + 2]) + intval($arr[$i + 1][$j + 1]) + intval($arr[$i + 2][$j]) + intval($arr[$i + 2][$j + 1]) + intval($arr[$i + 2][$j + 2]) ;
            
            if ( is_numeric($output)) {
                if($output < $sum ) {
                    $output = $sum;
                }
                
            } else {
                $output = $sum;
            }
        }
    }

    return $output;
}

$fptr = fopen("output.txt", "w");

// $file = fopen("input1.txt", "r");

$arr = [
    [-1, -1, 0, -9, -2, -2],
[-2, -1, -6, -8, -2, -5],
[-1, -1, -1, -2, -3, -4],
[-1, -9, -2, -4, -4, -5],
[-7, -3, -3, -2, -9, -9],
[-1, -3, -1, -2, -4, -5]
];

// while (!feof($file)) {
//     $arr[] = explode( ' ', fgets( $file ) );
// }

$result = hourGlassSum($arr);

fwrite($fptr, print_r( $result, true ) );
fclose($fptr);
