<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function armostrongNumber(int $n): void{
    $total = 0;
    $x = $n;
    while($n != 0){
        $remainder = $n % 10;
        $total = $total + $remainder * $remainder * $remainder;
        $n = $n / 10;
    }
    if($x == $total){
        echo "$x is an armostrong no.\n";
    }else{
        echo "$x is not an armostrong no. \n";
    }
}

//calling function and giving output here
$number = 407;
armostrongNumber($number);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
