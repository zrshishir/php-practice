<?php 

function margeDivider(array $arr): array{
    $length = count($arr);
    $mid = (int) ($length / 2);

    if($length == 1){
        return $arr;
    }

    $left = margeDivider(array_slice($arr, 0, $mid));
    $right = margeDivider(array_slice($arr, $mid));
    return marge($left, $right);
}

function marge(array $left, array $right): array{
    $marged = [];
    $leftLen = count($left);
    $rightLen = count($right);
    $leftIndex = $rightIndex = 0;

    while($leftIndex < $leftLen && $rightIndex < $rightLen){
        if($left[$leftIndex] > $right[$rightIndex]){
            $marged[] = $right[$rightIndex];
            $rightIndex++;
        }else{
            $marged[] = $left[$leftIndex];
            $leftIndex++;
        }
    }

    while($leftIndex < $leftLen){
        $marged[] = $left[$leftIndex];
        $leftIndex++;
    }

    while($rightIndex < $rightLen){
        $marged[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $marged;
}
$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = margeDivider($arr);
// echo $sortedArray;
echo implode(",", $sortedArray) . "\n";