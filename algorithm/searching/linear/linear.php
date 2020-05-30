<?php

function linearSearch(array $numbers, int $searchedValue){
    for($i = 0; $i < count($numbers); $i++){
        if($numbers[$i] == $searchedValue){
            return true;
        }
    }
    return false;
}

$numbers = range(1, 200, 5);
$searchedValue = 36;
if(linearSearch($numbers, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
$searchedValue = 44;
if(linearSearch($numbers, $searchedValue) == true){
    echo "Found". "\n";
}else{
    echo "Not Found \n";
}
echo implode(",", $numbers) . "\n";