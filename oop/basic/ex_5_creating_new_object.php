<?php

class Test{
    static public function getNew(){
        return new static;
    }
}


class childTest extends Test{

}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = ChildTest::getNew();
var_dump($obj4 instanceof ChildTest);