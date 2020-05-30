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

$numbers = range(1, 200, 5);
$searchedValue = 36;
$low = 0;
$high = count($numbers) - 1;
if(binarySearch($numbers, $searchedValue, $low, $high) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
$searchedValue = 44;
if(binarySearch($numbers, $searchedValue, $low, $high) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
echo implode(",", $numbers) . "\n";