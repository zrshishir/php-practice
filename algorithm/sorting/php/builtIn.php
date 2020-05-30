<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

sort($arr);
echo "sorting array in ascending order: " . implode(",", $arr) . "\n";

rsort($arr);
echo "sorting array in descending order: " . implode(",", $arr) . "\n";

asort($arr);
echo "Sort an array in reverse order and maintain index association: " . implode(",", $arr) . "\n";

ksort($arr);
echo "Sort an array by key: " . implode(",", $arr) . "\n";

krsort($arr);
echo "Sort an array by key in reverse order: " . implode(",", $arr) . "\n";

natsort($arr);
echo "Sort an array using a natural order algorithm: " . implode(",", $arr) . "\n";

natcasesort($arr);
echo "Sort an array using a case insensitive 'natural order' algorithm: " . implode(",", $arr) . "\n";

// sort($arr);
// echo "sorting array in ascending order: " . implode(",", $arr) . "\n";

// sort($arr);
// echo "sorting array in ascending order: " . implode(",", $arr) . "\n";

// echo implode(",", $arr) . "\n";