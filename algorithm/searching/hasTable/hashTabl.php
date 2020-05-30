<?php
$arr = [];
$count = rand(10, 30);

for($i = 0; $i < $count; $i++){
    $val = rand(1, 500);
    $arr[$val] = $val;
}

$searchedValue = 200;

if(isset($arr[$searchedValue])){
    echo "$searchedValue is found.\n";
}else{
    echo "$searchedValue is not found. \n";
}