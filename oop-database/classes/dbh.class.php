<?php


class Dbh 
{
    
    private $serviceName = "db";
    private $userName = "php_docker";
    private $pwd = "password";
    private $dbTable = "php_docker";
    
    // connect to db using mysqli
    protected function connect()
    {
        $conn = new mysqli($this->serviceName, $this->userName, $this->pwd, $this->dbTable);
        
        // var_dump($conn->connect_error);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;

    }
 
    
}

