<?php

function lcm(...$numbers) {
    $ans = $numbers[0];
    for ($i = 1, $max = count($numbers); $i < $max; $i++) {
        $ans = (($numbers[$i] * $ans) / gcd($numbers[$i], $ans));
    }

    return $ans;
}

echo lcm(1, 3, 4, 5);