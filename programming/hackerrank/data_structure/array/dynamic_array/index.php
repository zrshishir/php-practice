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
    $lastAnswer = 0;
    $store_array = [];

    foreach ($queries as $key => $value) {
        $x = intval( $value[1] );
        $y = intval( $value[2] );
        
        $index = ( $x ^ $lastAnswer ) % $n;
        var_dump($index);
        $store_array[$index] = $y;
    }

    var_dump($store_array);
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
