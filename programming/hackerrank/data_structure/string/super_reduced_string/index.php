<?php


function superReducedString( $s ) {

    $strings = str_split($s);
    $n = strlen($s);
    $output = "";

    for($i = 0; $i < $n; $i++) {
        if( isset($strings[$i + 1]) && $strings[$i] == $strings[$i + 1]) {
            $strings[$i] = '';
            $strings[$i + 1] = '';

            if (($i > 0 && isset($strings[$i + 2])) && $strings[$i - 1] == $strings[$i + 2]) {
                print_r($output);
                $strings[$i - 1] = '';
                $strings[$i + 2] = '';
                $output = str_replace($strings[$i - 1], '', $output);
            }
        }

        if( !empty($strings[$i]) ){
            $output .= $strings[$i];
        }
        
    }
    
    return ($output ?: "Empty String");
}

$fptr = fopen(("output.txt"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);

fwrite($fptr, print_r($result) . "\n");

fclose($fptr);
