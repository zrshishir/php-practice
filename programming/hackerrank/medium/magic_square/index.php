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
    $counterSum = PHP_INT_MAX;

    $magic_square =[
        [
            [8, 1, 6],
            [3, 5, 7],
            [4, 9, 2]
        ],
        [
            [6, 1, 8], 
            [7, 5, 3],
            [2, 9, 4]
        ],
        [
            [4, 9, 2],
            [3, 5, 7],
            [8, 1, 6]
        ],
        [
            [2, 9, 4],
            [7, 5, 3], 
            [6, 1, 8]
        ],
        [
            [8, 3, 4], 
            [1, 5, 9], 
            [6, 7, 2]
        ],
        [
            [4, 3, 8],
            [9, 5, 1],
            [2, 7, 6]
        ],
        [
            [6, 7, 2],
            [1, 5, 9],
            [8, 3, 4]
        ],
        [
            [2, 7, 6],
            [9, 5, 1],
            [4, 3, 8]
        ] 
        ];

    for($k = 0; $k < 8; $k++) {
        $result = 0;
        for($i = 0; $i < $x; $i++) {
            for ($j = 0; $j < $x; $j++) { 
                if (abs( $magic_square[$k][$i][$j] - $s[$i][$j]) > 0 ) {
                   $result = $result + abs( $magic_square[$k][$i][$j] - $s[$i][$j]);
                }
            }
        }
        if ($result <= $counterSum ) {
            $counterSum = $result;
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
