<?php


/**
 * climbing leaderboard function
 *
 * @param array $ranked
 * @param array $player
 * 
 * @return array
 */
function climbingLeaderboard($ranked, $player) {
 
    rsort($ranked);
    $ranked = array_values(array_unique($ranked));
    foreach ($player as $key => $value) {
        if(in_array($value, $ranked)) {
            $result[] = array_search($value, $ranked) + 1;
        } else {
            $sorted_array = addAndSort($ranked, $value);
            $ranked = $sorted_array[0];
            $result[] = array_search($value, $ranked) + 1;
        }
    }

    return $result;
}

function addAndSort($arr, $val) {
    $pos = 0;
    $item = 0;
    
    for($i = 0; $i <= sizeof($arr) ; $i++) {
        if( $val < $arr[$i] && $val > $arr[$i + 1]) {
            
            if($pos == 0) {
                $pos = $i + 1;
            }
             
                $item = $arr[$i + 1];
                $arr[$i + 1] = $val;
                $val = $item;
            
        }
    }

    return [$arr, $pos];
}

$fptr = fopen(("output.txt"), "w");

$ranked_size = rtrim(intval(fgets(STDIN)));
$ranked = [];
$arrTemp0 = rtrim( fgets( STDIN ) );
$ranked = array_map('intval', preg_split('/ /', $arrTemp0, -1, PREG_SPLIT_NO_EMPTY));

$player_size = rtrim(intval(fgets(STDIN)));
$arrTemp1 = rtrim( fgets( STDIN ) );
$player = array_map('intval', preg_split('/ /', $arrTemp1, -1, PREG_SPLIT_NO_EMPTY));

$result = climbingLeaderboard($ranked, $player);

fwrite($fptr, print_r($result) . "\n");
fclose($fptr);
