<?php
$array = [10,20,30,40,50];
$array[] = 70;
$array[] = 80;
$array[10] = 100;
$array[21] = 200;
$array[29] = 300;
$array[500] = 1000;
$array[1001] = 10000;
$array[71] = 1971;

$arraySize = count($array);

for($i = 0; $i < $arraySize; $i++) {
    echo "Position " . $i . " holds the value " . $array[$i] . "\n";
}

echo count($array) . "\n";