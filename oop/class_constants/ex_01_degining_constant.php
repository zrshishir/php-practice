<?php

class MyClass {
    const Constant = "Ziaur Rahman";

    function showConstant(){
        echo self::Constant . "\n";
    }
}
//scope resolution operator
echo MyClass::Constant . "\n";

//usign variable
$className = "MyClass";
echo $className::Constant . "\n";

//declaring object of a class
$obj = new MyClass();
echo $obj::Constant. "\n";

echo $obj->showConstant();

