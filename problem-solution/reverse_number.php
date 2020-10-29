<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function reverse_number(int $n): int{
    $sum = 0;
    while(floor($n)){
        $rem = $n % 10; 
        $sum = $sum * 10 + $rem;
        $n = $n / 10;
    }
    return $sum;
}

//calling function and giving output here
$inputNumber = 123456;
echo "Reverse no of $inputNumber is " . reverse_number($inputNumber) . ".\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
