<?php

function palindrome($string) {
    return strrev($string) === (string)$string;
}

echo palindrome('racecar'); // true
echo palindrome(2221222); // true
