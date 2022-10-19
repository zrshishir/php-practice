<?php


function superReducedString( $s ) {
    $strings = str_split($s);

    for($i = 0; $i < strlen($s); $i++) {
        if($strings[$i] == $strings[$i+1]) {
            $strings[$i] = '';
            $strings[$i+1] = '';
        }
    }
    
    return array_values(array_unique($strings));
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);
var_dump($result);
fwrite($fptr, $result . "\n");


fclose($fptr);
