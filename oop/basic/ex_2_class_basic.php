<?php

class A {
    function foo(){
        if(isset($this)){
            echo '$this is definded in class '. get_class($this) . "\n";
        }else{
            echo '$this is not defined.' . "\n";
        }
    }
}

class B {
    function bar(){
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();//we can't access a non static function like that, it has been deprecated now in php 7.4

$b = new B();
$b->bar();