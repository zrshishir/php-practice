<?php

// Complete the aVeryBigSum function below.
function kangaroo($x1, $v1, $x2, $v2) {
    $m1 = $x1 + $v1;
    $m2 = $x2 + $v2;

    if ( ($x1 > $x2 && $v1 > $v2 ) || ( $x2 > $x1 && $v2 > $v1 ) ) {
        return 'NO';
    }

    if ( $m1 == $m2 ) {
        return 'YES';
    }

    for ($i=0; $i < 10000; $i++) { 
        $m1 = $m1 + $v1;
        $m2 = $m2 + $v2;

        if ( $m1 == $m2 ) {
            return 'YES';
        }
    }

    return 'NO';
}

$fptr = fopen(("output.txt"), "w");

$stdin = fopen("input.txt", "r");

fscanf($stdin, "%d\n%d\n%d\n%d\n", $x1, $v1, $x2, $v2);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);