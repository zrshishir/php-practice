<?php


$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function rotateLeft($array_length, $rotation_number, $arr) {
    // Write your code here
   if ($rotation_number > 0) {
        $val = $arr[0];
        $i = 0;
        while ($i < $array_length) { 
            if ( $i == $array_length - 1 ) {
                $arr[$i] = $val;
            } 
            else {
                $arr[$i] = $arr[$i+1];
            }
            $i++;
        }
    $rotation_number--;
    
    return rotateLeft( $array_length, $rotation_number, $arr );
   }

   return $arr;
}



$fptr = fopen("output.txt", "w");

$file = fopen("test_case.txt", "r");

$line = fgets($file);
$first_line_input = explode(' ', $line);

$n = intval($first_line_input[0]);
$d = intval($first_line_input[1]);
$arr = array();

while (!feof($file)) {
    $arr = explode( ' ', fgets( $file ) );
}

$result = rotateLeft($n, $d, $arr);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
