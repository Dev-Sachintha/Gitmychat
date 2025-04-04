 <?php

require_once("classes/autoload.php");

$DB = new database();
$data = file_get_contents("php://input");
$myobject = json_decode($data);