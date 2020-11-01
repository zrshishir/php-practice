<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function alphabetTriangle(): void{
    $alphabets = range('A', 'Z');
    $k = 1;
    foreach($alphabets as $letter){
        for($i = 5; $i >= $k; $i--){
            echo $letter;
        }
        echo "\n";
        $k = $k + 1;
    }
}

//calling function and giving output here
alphabetTriangle();

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
