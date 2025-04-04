<?php

require_once("classes/autoload.php");

$DB = new Database();

$data = file_get_contents("php://input");
$decoded = json_decode($data);

if (!$decoded || !isset($decoded->data_type)) {
    echo "Invalid request.";
    exit;
}

if ($decoded->data_type == "signup") {

    $username = $decoded->username ?? '';
    $email = $decoded->email ?? '';
    $gender = $decoded->gender ?? '';
    $password = $decoded->password ?? '';
    $confirm_password = $decoded->confirm_password ?? '';

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Please fill in all fields.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Insert user into database
    $query = "INSERT INTO users (username, email, gender, password) VALUES (:username, :email, :gender, :password)";
    $stmt = $DB->connect()->prepare($query);

    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':gender', $gender);
    $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: Could not register user.";
    }
}
