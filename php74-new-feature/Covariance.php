<?php

//Covariance: the return type of method which belongs to the child can be more specific compared to the return type ot method parent.
//this is done through covariance. Consider the parent class Bank, and Dutch and City to be it's children


abstract class Bank {
    protected $name;

    public function __construct ($name) {
        $this->name = $name;
    }

    abstract public function account ();
}

//child 1 extending the Bank class
class Dutch extends Bank {
    public function account (): Void {
        echo $this->name . " has an account on Dutch.";
    }
}

//child 2 extending the Bank class
class City extends Bank {
    public function account(): Void {
        echo $this->name . " has an account on City.";
    }
}

//making an interface to create an bank account
interface AccountOpen {
    public function open($name): Bank;
}

//implementing AccountOpen in both child
class DutchAccountOpen implements AccountOpen {
    //not return parent class type but return child class type
    public function open($name): Dutch {
        return new Dutch($name);
    }
}

class CityAccountOpen implements AccountOpen {
    //not return parent class type, but return child class type
    public function open($name): City {
        return new City($name);
    }
}

$dutchAccOpen = (new DutchAccountOpen)->open('Ziaur Rahman');
$dutchAccOpen->account();
echo "\n";

$cityAccOpen = (new CityAccountOpen)->open('Shishir');
$cityAccOpen->account();
echo "\n";


