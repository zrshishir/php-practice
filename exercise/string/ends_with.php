<?php

function endswith($heystack, $needle) {
    
    return strpos($heystack, $needle) === strlen($heystack) - strlen($needle);
}

echo endswith("This is my name shishir", "shishir") . "\n";