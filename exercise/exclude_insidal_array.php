<?php 

function excludeArray($items)
{
    $result = [];
    foreach ($items as $item) {
        if (!is_array($item)) {
            $result[] = $item;
        } else {
            $result = array_merge($result, excludeArray($item));
        }
    }

    return $result;
}

print_r(excludeArray([1, [2], [[3], 4], 5]));
