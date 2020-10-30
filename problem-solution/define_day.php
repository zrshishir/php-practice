<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function defineDay(int $day, String $month, int $year): String{
    $monthCode = ['jan' => 0, 'feb' => 3, 'mar' => 3, 'apr' => 6, 'may' => 1, 'jun' => 4, 'jul' => 6, 'aug' => 2, 'sep' => 5, 'oct' => 0, 'nov' => 3, 'dec' => 5];
    $dayCode = ['SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY'];
    $monthVal = 0;

    foreach($monthCode as $mont => $value){
        if($month == $mont){
            $monthVal = $value;
        }
    }
    
    $totalNo = $day + $monthVal + $year + $year / 4;
    $dayVal = $totalNo % 7;
    return $dayCode[$dayVal];
}

//calling function and giving output here
$day = 5; //DAY IN DIGIT FORMAT
$month = "oct"; //INPUT FIRST THREE LETTER OF THE MONTH IN SMALL LETTER
$year = 20; //LAST TWO DIGIT OF THE YEAR

echo defineDay($day, $month, $year) . "\n";

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
