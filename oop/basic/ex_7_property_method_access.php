<?php

class Test{
    public $bar = "Property";

    public function bar(){
        return 'method';
    }
}

$obj = new Test();
echo $obj->bar, PHP_EOL;
echo $obj->bar(), PHP_EOL;