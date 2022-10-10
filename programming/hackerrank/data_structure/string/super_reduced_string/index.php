<?php


function superReducedString( $s ) {
    print(implode( "", array_unique( str_split($s) ) ));
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);
print_r($result, true);
fwrite($fptr, print_r( $result, true ) );
fclose($fptr);
