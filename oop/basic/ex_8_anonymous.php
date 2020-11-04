<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


class Foo{
    public $bar;

    public function __construct(){
        $this->bar = function (){
            return 28;
        };
    }
}

$obj = new Foo();
$fun = $obj->bar;
echo $fun(), PHP_EOL;
// echo ($obj->bar()),PHP_EOL; //for php 7.0

//calling function and giving output here

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memroy used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";
