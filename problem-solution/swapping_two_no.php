<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;

//swapping using third variable
function usingThirdVar(int $a, int $b): Array{
    $c = $a;
    $a = $b;
    $b = $c;

    return [$a, $b];
}

function usingPlusMinus(int $a, int $b): Array{
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    return [$a, $b];
}

function usingMultiDivision(int $a, int $b): Array{
    $a = $a * $b;
    $b = $a / $b;
    $a = $a / $b;

    return [$a, $b];
}

//calling function and giving output here
$a = 20;
$b = 10;
$res = usingThirdVar($a, $b);
echo "using third variable: a = {$res[0]}, b = {$res[1]}\n";
echo "no var, using plus and minus: a = {$res[0]}, b = {$res[1]}\n";
echo "no var, using multi and division: a = {$res[0]}, b = {$res[1]}\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
