<?php
//output 374625 for input.txt
/**
 * getMoneySpent method
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function getMoneySpent($keyboards, $drives, $b, $n, $m ) {
    // Write your code here
    $bestBudget = 0;

    for( $i = 0; $i < $n; $i++) {
        for( $j = 0; $j < $m; $j++) {
            
            $price = $keyboards[$i] + $drives[$j];
            
            if ($price <= $b && $price >= $bestBudget ) {
                $bestBudget = $price;
            }
        }
    }

    if ( $bestBudget == 0 ) {
        return -1;
    }

    return $bestBudget;
}


$fptr = fopen(("output.txt"), "w");

fscanf(STDIN, "%[^\n]", $bnm_temp);

$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf(STDIN, "%[^\n]", $keyboards_temp);
$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf(STDIN, "%[^\n]", $drives_temp);
$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
 */

$result = getMoneySpent($keyboards, $drives, $b, $n, $m);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);
