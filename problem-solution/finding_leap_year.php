<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function findingLeapYear(int $n): void{
    if($n % 4 == 0 && $n % 100 != 0){
        echo "$n is leap year.\n";
    }else{
        echo "$n is not leap year.\n";
    }
}

//calling function and giving output here
$n = 2025;
findingLeapYear($n);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
