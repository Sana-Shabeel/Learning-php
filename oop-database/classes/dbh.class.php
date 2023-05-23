<?php


class Dbh 
{
    
    private $serviceName = "db";
    private $userName = "php_docker";
    private $pwd = "password";
    private $dbTable = "php_docker";
    
    // connect to db using mysqli
    protected function connect($query)
    {
        $conn = new mysqli($this->serviceName, $this->userName, $this->pwd, $this->dbTable);
        $response = mysqli_query($conn, $query);
        return $response;

    }
    
    
    
}

