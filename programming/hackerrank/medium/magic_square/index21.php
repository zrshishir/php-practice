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
    $arr = $s;
    $counterSum = 0;

    if( $s[1][2] != $y ) {
        $s[1][2] = $y;
    }

    if( ($s[0][0] != $y + 1) && ($s[0][0] != $y - 1) && ($s[0][0] != $y + $x) && ($s[0][0] != $y - $x)) {
        
        if( $s[2][2] == $y - 1 ){
            $s[0][0] = $y + 1; $s[0][1] = 1; $s[0][2] = $y + $x;
            $s[1][0] = (2 * $y - $x); $s[1][2] = $x;
            $s[2][0] = $y - $x; $s[2][1] = $x * $x; $s[2][2] = $y - 1;
        } elseif ( $s[2][2] == $y + 1 ){
            $s[0][0] = $y - 1; $s[0][1] = $x * $x; $s[0][2] = $y - $x;
            $s[1][0] = $x; $s[1][2] = (2 * $y - $x);
            $s[2][0] = $y + $x; $s[2][1] = 1; $s[2][2] = $y + 1;
        } elseif ( $s[2][2] == $y + $x ){
            $s[0][0] = $y - $x; $s[0][1] = (2 * $y - $x); $s[0][2] = $y + 1;
            $s[1][0] = $x * $x; $s[1][2] = 1;
            $s[2][0] = $y - 1; $s[2][1] = $x; $s[2][2] = $y + $x;
        } elseif ( $s[2][2] == $y - $x ){
            $s[0][0] = $y + $x; $s[0][1] = $x; $s[0][2] = $y - 1;
            $s[1][0] = 1; $s[1][2] = $x * $x;
            $s[2][0] = $y + 1; $s[2][1] = (2 * $y - $x); $s[2][2] = $y - $x;
        } else {
            $s[0][0] = $y + $x; $s[0][1] = $x; $s[0][2] = $y - 1;
            $s[1][0] = 1; $s[1][2] = $x * $x;
            $s[2][0] = $y + 1; $s[2][1] = (2 * $y - $x); $s[2][2] = $y - $x;
        }
        
    } elseif ($s[0][0] == $y + 1) {
        $s[0][0] = $y + 1; $s[0][1] = 1; $s[0][2] = $y + $x;
        $s[1][0] = (2 * $y - $x); $s[1][2] = $x;
        $s[2][0] = $y - $x; $s[2][1] = $x * $x; $s[2][2] = $y - 1;
    } elseif ($s[0][0] == $y - 1) {
        $s[0][0] = $y - 1; $s[0][1] = $x * $x; $s[0][2] = $y - $x;
        $s[1][0] = $x; $s[1][2] = (2 * $y - $x);
        $s[2][0] = $y + $x; $s[2][1] = 1; $s[2][2] = $y + 1;
    } elseif ($s[0][0] == $y - $x) {
        $s[0][0] = $y - $x; $s[0][1] = (2 * $y - $x); $s[0][2] = $y + 1;
        $s[1][0] = $x * $x; $s[1][2] = 1;
        $s[2][0] = $y - 1; $s[2][1] = $x; $s[2][2] = $y + $x;
    } elseif ($s[0][0] == $y + $x) {
        $s[0][1] = $x; $s[0][2] = $y - 1;
        $s[1][0] = 1; $s[1][2] = $x * $x;
        $s[2][0] = $y + 1; $s[2][1] = (2 * $y - $x); $s[2][2] = $y - $x;
    } else {
        $s[0][0] = $y + $x; $s[0][1] = $x; $s[0][2] = $y - 1;
        $s[1][0] = 1; $s[1][2] = $x * $x;
        $s[2][0] = $y + 1; $s[2][1] = (2 * $y - $x); $s[2][2] = $y - $x;
    }

    
    for($i = 0; $i < $x; $i++) {
        for ($j = 0; $j < $x; $j++) { 
            if (abs( $arr[$i][$j] - $s[$i][$j]) > 0 ) {
                $counterSum = $counterSum + abs( $arr[$i][$j] - $s[$i][$j]);
            }
        }
    }

    return $counterSum;
}

$fptr = fopen(("output.txt"), "w");

$arr = [];
$arrTemp0 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp0, -1, PREG_SPLIT_NO_EMPTY));

$arrTemp1 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp1, -1, PREG_SPLIT_NO_EMPTY));

$arrTemp2 = rtrim( fgets( STDIN ) );
$arr[] = array_map('intval', preg_split('/ /', $arrTemp2, -1, PREG_SPLIT_NO_EMPTY));

$result = formingMagicSquare($arr);

fwrite($fptr, $result . "\n");
fclose($fptr);
