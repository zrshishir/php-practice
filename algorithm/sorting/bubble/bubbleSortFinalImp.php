<?php 

//using a flag on inner iteration

function bubbleSort(array $arr): array{
    $length = count($arr);
    $count = 0;
    $bound = $length - 1;
    for($i = 0; $i < $length; $i++){
        $swapped = false;
        $newBound = 0;
        for($j = 0; $j < $bound; $j++){
            $count++;
            if($arr[$j] > $arr[$j + 1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
                $swapped = true;
                $newBound = $j;
            }
        }
        $bound = $newBound;
        if(!$swapped){
        break;
        }
    }
    echo $count. "\n";
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = bubbleSort($arr);
echo implode(",", $sortedArray) . "\n";