<?php

class database
{
    private $conn;

    function __construct()
    {



    }
    private function connect ()
    {
        try{
            $mypdo = new PDO($string, DBUSER, DBPASS);

        }catch(PDOException $e){
            
            echo $e->getMessage();
        }
        
    }
        
}