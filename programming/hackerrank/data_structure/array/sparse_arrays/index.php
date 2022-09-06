<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function matchingStrings($strings, $queries) {
    // Write your code here
    
}



$fptr = fopen(("output.txt"), "w");


$strings_count = intval(trim(fgets(STDIN)));

$strings = [];

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval( trim( fgets( STDIN ) ) );
$queries = [];

for ($i = 0; $i < $queries_count; $i++) { 
    $query_item = rtrim( fgets( STDIN ), "\r\n" );
    $queries[] = $query_item;
}

$result = matchingStrings($strings, $queries);

fwrite($fptr, $result . "\n");

fclose($fptr);
