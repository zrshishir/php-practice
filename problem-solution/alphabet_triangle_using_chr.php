<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function alphabetTriangle(): void{
    for($i = 65; $i <= 69; $i++){
        for($j = 5; $j >= $i - 64; $j--){
            echo chr($i);
        }
        echo "\n";
    }
}

//calling function and giving output here
alphabetTriangle();

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
