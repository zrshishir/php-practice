<?php


function superReducedString( $s ) {
    $strings = str_split($s);
    for($i = 0; $i < strlen($s); $i++) {

    }
    print_r($strings);
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);
print_r($result, true);
fwrite($fptr, print_r( $result, true ) );
fclose($fptr);
