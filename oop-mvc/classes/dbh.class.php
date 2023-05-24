<?php


class Dbh 
{
    private $serviceName = "db";
    private $userName = "php_docker";
    private $pwd = "password";
    private $dbTable = "php_docker";
    
    protected function connect() 
    {
       $conn = new mysqli($this->serviceName, $this->userName, $this->pwd, $this->dbTable);
       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;
    }
}