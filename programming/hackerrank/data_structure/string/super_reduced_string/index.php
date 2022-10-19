<?php


function superReducedString( $s ) {
    $strings = str_split($s);
    $result = [];
    $output = "";

    for($i = 0; $i < strlen($s); $i++) {
        !isset($result[$strings[$i]]) ? $result[$strings[$i]] = 1 : $result[$strings[$i]]++;
        
        if (($result[$strings[$i]] % 2 != 0)) {
            $output = $output . $strings[$i];
        } 

        if  ($result[$strings[$i]] % 2 == 0) {
            $output = str_replace($strings[$i], "", $output);
        }
    }
    
    return empty($output) ? "Empty String" : $output;
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);
var_dump($result);
fwrite($fptr, $result . "\n");


fclose($fptr);
