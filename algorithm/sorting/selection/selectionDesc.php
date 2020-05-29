<?php 


function selectionSort(array $arr): array{
    $length = count($arr);
    $count = 0;
    for($i = 0; $i < $length; $i++){
        $max = $i;
        for($j = $i + 1; $j < $length; $j++){
            $count++;
            if($arr[$j] > $arr[$max]){
                $max = $j;
            }
        }
        if($max != $i){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$max];
            $arr[$max] = $tmp;
        }
    }

    echo $count . "\n";
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = selectionSort($arr);
echo implode(",", $sortedArray) . "\n";