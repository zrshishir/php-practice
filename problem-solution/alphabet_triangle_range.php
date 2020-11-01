<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function alphabetTriangle(): void{
    $alphabets = range('A', 'Z');
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j <= $i; $j++){
            echo $alphabets[$j];
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
