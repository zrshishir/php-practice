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
 
    sort($ranked);
    $ranked = array_values(array_unique($ranked));
    foreach ($player as $key => $value) {
        
        if( in_array($value, $ranked)) {
            $result[] = array_search($value, $ranked) + 1;
        } else {
            $rank = 0;
            
            while($rank < sizeof($ranked)){
                if($value < $ranked[$rank])
                    break;
        
                $rank++;
            }
        
            $result[] = $rank++;
        }
    }

    return $result;

    rsort($ranked);
    $total_rank = sizeof($ranked) + 1;
    $rank = 0;
    foreach ($player as $key => $value) {
        
        while($rank < sizeof($ranked)){
            if($value < $ranked[$rank])
                break;
    
            $rank++;
        }
    
        $result[] = $rank++;
    }

    return $result;
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
