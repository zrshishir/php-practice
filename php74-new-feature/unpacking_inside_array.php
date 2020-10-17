<?php

$fruitStack = ['mango', 'banana'];

$fruits = ['apple', 'orange', ...$fruitStack, 'guava', 'lichi'];

print_r($fruits);