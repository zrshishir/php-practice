<?php
include_once('InterfaceConstant.php');

class DatabaseConnection implements InterfaceConstant
{
    //declaring and accessing private property from interface
    private $hostName = InterfaceConstant::HOST;
    private $dbNAme = InterfaceConstant::DBNAME;
    private $password = InterfaceConstant::PW;
    private $userName = InterfaceConstant::UNAME;

    public function testConnection()
    {
        $hookup=new mysqli($this->hostName, $this->userName, $this->password, $this->dbNAme);
            
        if (mysqli_connect_error())
        {
            die('bad mojo');
        }
        
        print "You're hooked up Ace! <br />" . $hookup->host_info;
        $hookup->close();
    }
}

$dbConnect = new DatabaseConnection();
$dbConnect->testConnection();