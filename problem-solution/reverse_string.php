<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function reverseString(String $str): void{
    $stringLength = strlen($str);
    for($i = ($stringLength - 1); $i >= 0; $i--){
        echo $str[$i];
    }
}

//calling function and giving output here
echo reverseString('shishir') . "\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
