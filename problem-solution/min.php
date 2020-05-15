<?php

function gettingMax(array $arr): int{
    $n = count($arr);
    $max = $arr[0];

    for($i = 0; $i < $n; $i++){
        if($max > $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}

$arr = [1, 2, 3, 4, 5, 6];

echo (gettingMax($arr));