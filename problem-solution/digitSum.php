<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0; 

function digitSum(int $number): int{
    $remainder = $number % 10;
    $quotient = $number / 10;
    if($quotient < 1){
     return true;
    }else{
        return $remainder + digitSum($quotient);
    }
    
}

$num = 1234409;

echo digitSum($num);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
