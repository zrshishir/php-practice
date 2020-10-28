<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function even_odd(int $n): String{
    if($n % 2 == 0){
        return 'this is even no!';
    }else{
        return 'this is odd no!';
    }
}

//calling function and giving output here
echo even_odd(0) . "\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
