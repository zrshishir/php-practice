<?php 


function selectionSort(array $arr): array{
    $length = count($arr);
    $count = 0;
    for($i = 0; $i < $length; $i++){
        $min = $i;
        for($j = $i + 1; $j < $length; $j++){
            $count++;
            if($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        if($min != $i){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }

    echo $count . "\n";
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = selectionSort($arr);
echo implode(",", $sortedArray) . "\n";