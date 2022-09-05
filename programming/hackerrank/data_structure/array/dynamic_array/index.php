<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function dynamicArray($n, $queries) {
    // Write your code here
    $output_array = [];
    $store_array = [];
    $previous_last_answer = 0;
    
    
    foreach ($queries as $key => $value) {
        $last_answer = 0;
        $type = intval( $value[0] );
        $x = intval( $value[1] );
        $y = intval( $value[2] );
        
        if ( $type == 1 ) {
            $ind = ( $x ^ $last_answer ) % $n;
            $store_array[ $ind ][] = $y;
            
        } elseif ($type == 2) {
            $ind = ( $x ^ $previous_last_answer ) % $n;
            
            if ( isset( $store_array[$ind] ) ) {
                
                $last_answer = $store_array[ $ind ][$y % sizeof($store_array[$ind])];
                // array_pop($store_array[$ind]);
                $previous_last_answer = $last_answer;
                $output_array[] = $last_answer;
            }
            
        }
    }
    
    return ($output_array) ;
}



$fptr = fopen("output.txt", "w");

$file = fopen("input2.txt", "r");

$line = fgets($file);
$first_multiple_input = explode(' ', $line);

$n = intval($first_multiple_input[0]);
$q = intval($first_multiple_input[1]);

$queries = array();
while (!feof($file)) {
    $queries[] = explode( ' ', fgets( $file ) );
}

$result = dynamicArray($n, $queries);

fwrite($fptr, print_r( $result, true ) );
// file_put_contents( "output.txt", print_r( $result, true ));

fclose($fptr);
