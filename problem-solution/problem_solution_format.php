<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function fibonacci(int $n): int{
    
}

//calling function and giving output here

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
