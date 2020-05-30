<?php

function interpolationSearch(array $arr, int $searchedValue){
    $low = 0;
    $high = count($arr) - 1;

    while($arr[$high] != $arr[$low] && $searchedValue >= $arr[$low] && $searchedValue <= $arr[$high]){
        $mid = (int)($low + (($searchedValue - $arr[$low]) * ($high - $low) / ($arr[$high] - $arr[$low])));

        if($searchedValue > $arr[$mid]){
            $low = $mid + 1;
        }elseif($searchedValue < $arr[$mid]){
            $high = $mid - 1;
        }else{
            return $mid;
        }
    }
    if($searchedValue == $arr[$low]){
        return $low;
    }else{
        return false;
    }
}

$arr = range(1, 200, 5);
$searchedValue = 36;
if(interpolationSearch($arr, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
$searchedValue = 44;
if(interpolationSearch($arr, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
echo implode(",", $arr) . "\n";