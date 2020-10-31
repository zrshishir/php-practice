<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function isLeapYear(int $n): void{
    if($n % 4 == 0 && $n % 100 != 0){
        echo "$n is leap year.\n";
    }else{
        echo "$n is not leap year.\n";
    }
}

//calling function and giving output here
$fromYear = 1991;
$toYear = 2020;

for($i = $fromYear; $i <= $toYear; $i++){
    echo isLeapYear($i);
}

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
