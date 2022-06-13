<?php

class Database
{

    private $serverName = "localhost";
    private $dbUserName = "root";
    private $dbPassword = "";
    private $dbName = "footage_db";

    protected function connect() 
    {

        $conn = new Mysqli($this->serverName, $this->dbUserName, $this->dbPassword, $this->dbName);

        if ($conn->connect_error) {
            return "DATABASE_CONNECTION_FAIL";
            die("Connection Failed:" .$conn->connect_error);
        }

        return $conn; 

    }

    protected function readQuery($query) 
    { 

        $result = $this->connect()->query($query) or die($this->connect()->error); 

        return $result;

    }

    protected function readStmt($stmt) 
    { 

        $stmt = $stmt->execute() or die ($stmt->error);

        return $stmt;

    }

}