<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function fibonacci(int $n): int{
    global $count;
    $count++;
    if($n == 0)
        return 1;
    elseif($n == 1)
        return 1;
    else    
        return fibonacci($n - 1) + fibonacci($n - 2);
}

echo "fibonacci series is: ";
for($i = 0; $i < 10; $i++){
    echo fibonacci($i) . "\t";
}
echo "\n";
echo "fibonacci called: ". $count . "\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
