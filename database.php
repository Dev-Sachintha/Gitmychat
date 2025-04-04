<?php

class Database
{
    private $conn;

    public function connect()
    {
        $dsn = "mysql:host=localhost;dbname=gitmychat_db";
        try {
            $this->conn = new PDO($dsn, DBUSER, DBPASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }
}
