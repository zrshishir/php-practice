<?php

interface InterfaceConstant
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "enzaime";
    const PW = "password";
    
    function testConnection();
}