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
    if ( $n == $p || $p > $n || $p == 1 || ( ($n % 2 != 0) && ($n - 1 == $p) ) ) {
        return 0;
    }

    $pageMiddle = $n / 2;
    $totalPageCount = intval( $pageMiddle );
    $pageCount = intval( $p / 2 );

    if ( $p < $pageMiddle ) {
        return intval($pageCount ) ;
    } else if ( $p > $pageMiddle ) {
        return ($totalPageCount - $pageCount);
    }
 
    return intval($pageMiddle / 2) ;
}


$fptr = fopen(("output.txt"), "w");

$n = intval( rtrim( fgets( STDIN ) ) );

$p = intval( rtrim( fgets( STDIN ) ) );

$result = pageCount($n, $p);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
