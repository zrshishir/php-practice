<?php

interface InterfaceConstant
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "db_name";
    const PW = "pass";
    
    function testConnection();
}