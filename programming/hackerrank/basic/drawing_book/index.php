<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function pageCount($n, $p) {
    // Write your code here
    if ( $n == $p || $p > $n ) {
        return 0;
    }

    if ( )
    var_dump( $n, $p);
}


$fptr = fopen(("output.txt"), "w");

$n = intval( rtrim( fgets( STDIN ) ) );

$p = intval( rtrim( fgets( STDIN ) ) );

$result = pageCount($n, $p);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
