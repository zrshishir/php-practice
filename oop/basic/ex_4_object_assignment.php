<?php
include 'ex_1_class_definition.php';

$instance = new SimpleClass();
$assigned = $instance; //assigning object to another object
$reference =& $instance; // assigning object reference to another var


$instance->name = '$assigned will have this value';
$instance = NULL;

var_dump($instance);
var_dump($reference);
var_dump($assigned);