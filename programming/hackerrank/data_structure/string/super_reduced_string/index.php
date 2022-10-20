<?php


function superReducedString( $s ) {

    $strings = str_split($s);
    $n = strlen($s);
    $output = "";

    for($i = 0; $i < $n; $i++) {
        if( isset($strings[$i + 1]) && $strings[$i] == $strings[$i + 1]) {
            $strings[$i] = '';
            $strings[$i + 1] = '';
        }
        
        if( !empty($strings[$i]) ){
            if( substr($output, -1) == $strings[$i] ){
                $output = substr($output, 0, -1);
            } else {
                $output .= $strings[$i];
            }
        }
    }
    
    return ($output ?: "Empty String");
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);

fwrite($fptr, print_r($result, true) . "\n");

fclose($fptr);
