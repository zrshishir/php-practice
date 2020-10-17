<?php


class SimpleClass{
    public $name = "Ziaur Rahman"; //property declaration 

    public function displayName(){
        echo $this->name. "\n";
    }
}


$simple = new SimpleClass();

$simple->displayName();
echo $simple->name;