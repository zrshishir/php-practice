<?php

// Complete the aVeryBigSum function below.
function aVeryBigSum($ar_count, $ar) {
    $sum = 0;
    for ($i=0; $i < $ar_count; $i++) { 
        $sum = $sum + $ar[$i];
    }
    return $sum;
}

$fptr = fopen(("output.txt"), "w");

$stdin = fopen("input.txt", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar_count, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);