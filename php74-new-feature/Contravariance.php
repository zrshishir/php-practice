<?php
//Contravariance: the parameters of the method which belong to the child can be less specific compared to the parameters of the method of parent. This is done through contravariance.

abstract class Bank {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    
}