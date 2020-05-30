<?php

function binarySearch(array $numbers, int $searchedValue, int $low, int $high): bool{

    while($low <= $high){
        $mid = (int)(($low + $high) / 2);

        if($searchedValue > $numbers[$mid]){
            return binarySearch($numbers, $searchedValue, $mid + 1, $high);
        }elseif($searchedValue < $numbers[$mid]){
            return binarySearch($numbers, $searchedValue, $low, $mid - 1);
            $high = $mid - 1;
        }else{
            return true;
        }
    }
    return false;
}

function exponential(array $arr, int $key): int{
    $size = count($arr);
    if($size == 0){
        return false;
    }

    $bound = 1;
    while($bound < $size && $arr[$bound] < $key){
        $bound *= 2;
    }

    return binarySearch($arr, $key, intval($bound/2), min($bound, $size));
}

$numbers = range(1, 200, 5);
$searchedValue = 36;

if(exponential($numbers, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
$searchedValue = 44;
if(exponential($numbers, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
echo implode(",", $numbers) . "\n";