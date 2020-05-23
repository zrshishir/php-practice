<?php
$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];
$splArray = SplFixedArray::fromArray($array);
print_r($splArray);
echo "<br>";

// if we don't want teh 0 indexes
$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];
$splArray = SplFixedArray::fromArray($array, false);
print_r($splArray);


echo "<br>";
$items = 5; 
$array = new SplFixedArray($items); 

print_r($array);
for ($i = 0; $i < $items; $i++){  
    $array[$i] = $i * 10; 
} 

echo "<br>";
$newArray = $array->toArray();
print_r($newArray);
