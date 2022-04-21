<?php

class Database
{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function connect()
    {
        $this->serverName = 'localhost';
        $this->userName = 'root';
        $this->password = '';
        $this->dbName = 'inventory';

        // Create connection
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}