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
        
        if ( $type == 1) {
            // determine the index of an array
            $index = ( $x ^ $last_answer ) % $n; 
            
            // storing in array
            $store_array[$index][] = $y;
            var_dump($index, $store_array);
        } elseif ( $type == 2 ) {
            // define index 2
            $idx1 = ( $x ^ $previous_last_answer ) % $n;
            // var_dump( $idx1 );
            $last_answer = end( $store_array[ $idx1 ] );
            $previous_last_answer = $last_answer;
            $output_array[ $idx1 ] = $last_answer;
       }
    }
    
    return array_reverse( $store_array );
}



$fptr = fopen("output.txt", "w");

$file = fopen("input.txt", "r");

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
