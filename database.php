<?php

class Database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }

    private function connect()
    {
        $string = "mysql:host=localhost;dbname=gitmychat_db";

        try {
            $connection = new PDO($string, DBUSER, DBPASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
    }

    public function write($query, $data_array = [])
    {
        $con = $this->connect();
        $statement = $con->prepare($query);

        foreach ($data_array as $key => $value) {
            $statement->bindValue(':' . $key, $value);
        }

        $check = $statement->execute();
        return $check ? true : false;
    }

    public function generate_id($max)
    {
        $rand = "";
        $rand_count = rand(4, $max);
        for ($i = 0; $i < $rand_count; $i++) {
            $rand .= rand(0, 9);
        }
        return $rand;
    }
}
