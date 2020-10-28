<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

//factorial using recursion
function factorial(int $n): int{
    if($n <= 1){
        return 1;
    }else{
        return $n * factorial($n - 1);
    }
}

//calling function and giving output here
echo "The factorial is: " . factorial(6) . "\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
