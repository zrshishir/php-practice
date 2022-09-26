<?php


/**
 * Undocumented function
 *
 * @param int $x
 * @param int $y
 * @param int $z
 * 
 * @return string
 */
function formingMagicSquare( $s ) {
 
    $y = 5;
    $x = 3;
    $counterSum = 0;

    if( $s[1][2] != $y ) {
        $counterSum = $counterSum + abs( $s[1][2] - $y );
        $s[1][2] = $y;
    }

    var_dump($s[1][2]);
    
    for($i = 0; $i < $x; $i++) {
        for ($j = 0; $j < $x; $j++) { 
            // var_dump($s[$i][$j]);
        }
    }

    $corner00 = $y + 1; $edge01 = $x * $x; $corner02 = $y - 1;
    $edge10 = $x; $middle = $y; $edge12 = 2 * $y - $x; 
    $corner20 = $y + $x; $edge21 = 1; $corner22 = $y - $x;
}

$fptr = fopen(("output.txt"), "w");

$arr = [];
$arrTemp0 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp0, -1, PREG_SPLIT_NO_EMPTY));

$arrTemp1 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp1, -1, PREG_SPLIT_NO_EMPTY));

$arrTemp2 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp2, -1, PREG_SPLIT_NO_EMPTY));

formingMagicSquare($arr);


fclose($fptr);
