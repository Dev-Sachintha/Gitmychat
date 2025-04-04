<?php

class database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }
    private function connect()
    {
        $string = "mysql:host=localhost;gitmychat_db";

        try {
            $connection = new PDO($string, DBUSER, DBPASS);
            return $connection;
        } catch (PDOException $e) {

            echo $e->getMessage();
            die;
        }
        return false;
    }
}
