<?php 

//if the password is not set then set a password
//actually the below line elaborates the code $user['passwor'] ? $user['password'] : 123456;

$user['passwor'] ??= 123456;
print_r($user);