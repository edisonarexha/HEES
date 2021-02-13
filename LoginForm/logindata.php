<?php

$username = $_POST ['username'];
$password = $_POST['password'];

function guidv4($data = null) {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
} 

if (!empty($name) || !empty($username) || !empty($password) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registerform";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
        // $SELECT = "SELECT username From signup Where username = ? Limit = 1";
        $uuid = guidv4();
        $ADD = "INSERT INTO login, login (id, username, password) VALUES ('$uuid', '$username', '$password')";
       
        if ($conn->query($ADD) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $ADD . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>