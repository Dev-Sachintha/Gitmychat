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
    public function write($query,$data_array =[]){
        $con = $this->connect();

        $statement = $con->prepare($query);

    foreach ($data_array as $key => $value){
          # code.......    
        $statement->bindparam(':'.$key,$value);
        }

       $check = $statement->execute();
       if($check){
          return true; 
       }
       return false;
    }
}
