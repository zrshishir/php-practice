<?php

//write a php code to sum all the numbers in an array using recursion
function sum($items)
{
    $result = 0;
    foreach ($items as $item) {
        if (!is_array($item)) {
            $result += $item;
        } else {
            $result += sum($item);
        }
    }

    return $result;
}

print_r(sum([1, [2], [[3], 4], 5]));
