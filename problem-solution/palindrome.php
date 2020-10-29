<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function palindrome_number(int $inputNumber): int{
    $sum = 0;

    while(floor($inputNumber)){
        $rem = $inputNumber % 10;
        $sum = $sum * 10 + $rem;
        $inputNumber = $inputNumber / 10;
    }

    return $sum;
}

//calling function and giving output here
$n = 1291;

if($n == palindrome_number($n)){
    echo "$n is a palindrome no.\n";
}else{
    echo "$n is not a palindrome no. \n";
}

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
