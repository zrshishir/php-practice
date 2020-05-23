<?php
//simple memory calcuation
$startMemory = memory_get_usage();
$array = range(1,100000);
$endMemory = memory_get_usage();
echo ($endMemory - $startMemory)." bytes";

//with SplFixedArray memroy calculation
echo "<br>";

$items = 100000;
$startMemory1 = memory_get_usage();
$array = new SplFixedArray($items);
for ($i = 0; $i < $items; $i++) {
$array[$i] = $i;
}
$endMemory1 = memory_get_usage();
$memoryConsumed = ($endMemory1 - $startMemory1) / (1024*1024);
$memoryConsumed = ceil($memoryConsumed);
echo "memory = {$memoryConsumed} MB\n";