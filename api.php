<?php

require_once("classes/autoload.php");

$DB = new Database();

$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);

if (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "signup") {

    $data = [];
    $data['userid'] = $DB->generate_id(20);
    $data['username'] = $DATA_OBJ->username ?? '';
    $data['email'] = $DATA_OBJ->email ?? '';
    $data['password'] = password_hash($DATA_OBJ->password ?? '', PASSWORD_DEFAULT);
    $data['data'] = date("Y-m-d H:i:s");

    $query = "INSERT INTO users (userid, username, email, password, data) VALUES (:userid, :username, :email, :password, :data)";
    $result = $DB->write($query, $data);

    if ($result) {
        echo "Your profile was created.";
    } else {
        echo "Your profile was NOT created.";
    }
}
