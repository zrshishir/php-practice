<?php

class Foo {
    const my_country = <<< EOT
    My country is Bangladesh and i live in Bangladesh. It is a beautiful country.
    EOT;
    const country = <<< EOT
    My country is Bangladesh and i live in Bangladesh. It is a beautiful country.
    EOT;
}

//scope resolution 
echo Foo::my_country . "\n";

//using class as a variable with scope resolution operator
$className = "Foo";
echo $className::country . "\n";

//using object with cope resolution operator
$obj = new Foo();
echo $obj::my_country . "\n" . $obj::country . "\n";