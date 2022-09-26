<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function pageCount($steps, $path) {
    // Write your code here
    $counter = 0;
    $valley = 0;
    $previousStep = 0;

    for ( $i = 0; $i < $steps; $i++ ) { 
        if ( $path[$i] == 'U') {
            $counter++;
        }

        if ( $path[$i] == 'D') {
            $counter--;
        }

        if ( $counter == 0 && ( $previousStep == (-1))) {
            $valley++;
        }

        $previousStep = $counter;

    }

    return $valley;
}


$fptr = fopen(("output.txt"), "w");

$steps = intval( rtrim( fgets( STDIN ) ) );

$path = rtrim( fgets( STDIN ) ) ;

$result = pageCount($steps, $path);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
