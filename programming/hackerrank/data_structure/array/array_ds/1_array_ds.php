<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function array_ds(array $n) {
    $array_length = count($n);
    $output = [];

    for ($i=1; $i <= $array_length; $i++) { 
        $output[] = $n[$array_length - $i];
    }
    var_dump($output);
}

//calling function and giving output here
array_ds([1, 4, 3, 2]);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
