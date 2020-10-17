<?php


class User{
    public int $i;
    public string $name;

    public function __construct($name, $age){
        $this->name = $name;
        $this->i = $age;
    }

    public function name(){
        echo "Name: " . $this->name. " and age: " . $this->i;
    }
}

$usr = New User("Ziaur Rahman", 28); // if you want to get an error which is not integer then you can assign age = "k28"
$usr->name();

