<?php 

function insertionSort(array $arr): array{
    $length = count($arr);
    $count = 0;

    for($i = 0; $i < $length; $i++){
        $key = $arr[$i];
        $j = $i - 1;

        while($j >= 0 && $arr[$j] > $key){
            $count++;
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $count++;
        $arr[$j + 1] = $key;
    }

    echo $count. "\n";
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = insertionSort($arr);
echo implode(",", $sortedArray) . "\n";