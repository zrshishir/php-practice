<?php

function pull(&$items, ...$params)
{
    $items = array_values(array_diff($items, $params));
    return $items;
}

$items = ['a', 'b', 'c', 'a', 'b', 'c'];
var_dump(pull($items, 'a', 'c')); // $items will be ['b', 'b']
