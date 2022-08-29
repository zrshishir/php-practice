<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function array_ds(array $n) {
    // define the length of an array
    $array_length = count($n);
    // declaring an array output
    $output = [];

    //implement the logic
    for ($i=1; $i <= $array_length; $i++) { 
        $output[] = $n[$array_length - $i];
    }
    // return the output
    return $output;
}

//calling function and giving output here
var_dump(array_ds([1, 4, 3, 2]));

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
